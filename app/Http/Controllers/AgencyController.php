<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Agency;
use App\User;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function dashboard(){
        return view('agencies.dashboard');
    }

    public function posts(){
        $posts = Post::where('agency_id',auth()->user()->id)->get();
        return view('agencies.posts')->with('posts',$posts);
    }

    public function campaigns(){
        $campaigns = Campaign::where('agency_id',auth()->user()->id)->get();
        return view('agencies.campaigns')->with('campaigns',$campaigns);
    }

    public function account_detials(){
        $account = Account::where('client_id',auth()->user()->id)->get();
        $due = 0;
        $done = 0;
        foreach($account as $acc){
            $due+=$acc['due_payments'];
            $done+=$acc['done_payments'];
        }
        return view('clients.account_details')->with(['due'=>$due,'done'=>$done]);
    }

    public function edit($id){
        $user = User::find($id);
        $agency = Agency::where('email',auth()->user()->email)->first();
        return view('agencies.edit')->with(['user'=>$user,'agency'=>$agency]);
    }

    public function create(Request $request){

        // var_dump(request('name'));
        // var_dump(request('email'));
        // var_dump(request('company_name'));
        // var_dump(request('company_website'));
        // var_dump(request('description'));
        // var_dump(request('portfolio'));
        // var_dump(request('password'));
        $this->validate($request,[
            'name'=>'required|string|min:3',
            'email'=>'required|string|email|unique:users,email,',
            'company_name'=>'required|string',
            'company_website'=>'required|url',
            'phone'=>'required|min:10|max:10|unique:users,phone_no',
            'description'=>'required|string',
            'portfolio'=>'required|url',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $agency = new Agency;


        $agency->name = $request->input('name');
        $agency->email = $request->input('email');
        $agency->company_name = $request->input('company_name');
        $agency->company_website = $request->input('company_website');
        $agency->portfolio = $request->input('portfolio');
        $agency->description = $request->input('description');
        $password = $request->input('password');    
        // $agency->password = $request->input('password');
        $agency->password = Hash::make($password);
        $agency->save();

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($password);
        $user->role = 'Agency';
        $user->phone_no = $request->input('phone');
        $user->save();


        return redirect()->back()->with('success','Profile successfully created!');
    }


    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users,email,'.$id,
            'phone_no'=>'required|string|size:10|unique:users,phone_no,'.$id,
            'company_name'=>'required|string',
            'company_website'=>'required|url',
            'description'=>'required|string',
            'portfolio'=>'required|url',
            'password'=>'nullable|string|confirmed'
        ]);

        $user = User::find($id);
        $agency = Agency::where('email',$request->input('email'))->first();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_no = $request->input('phone_no');
        if($request->input('password')!=null)
            $user->password = Hash::make($request->input('password'));
        $user->save();

        $agency->name = $request->input('name');
        $agency->email = $request->input('email');
        $agency->company_name = $request->input('company_name');
        $agency->company_website = $request->input('company_website');
        $agency->portfolio = $request->input('portfolio');
        $agency->description = $request->input('description');
        $agency->save();

        return redirect('/dashboard/agencies/'.auth()->user()->id)->with('success','Profile successfully updated!');
    }

    public function destroy(Request $request,$id){
        $user = User::find($id);
        $agency = Agency::where('email',$user->email)->first();
        $user->delete();
        $agency->delete();

        return redirect()->back()->with('success','Agency successfully deleted!');
    }

    public function new_post(){
        return view('agencies.new_post');
    }

    public function store_post(Request $request){
        $this->validate($request,[
            'client_name'=>'required|string',
            'client_email'=>'required|string|email',
            'post'=>'required|file',
            'scheduled_at'=>'required|date'
        ]);

        $post = new Post;

        $post->client_name = $request->input('client_name');
        $user = User::where('email',$request->input('client_email'))->first();
        $post->client_id = $request->input('client_id');
        $agency = Agency::where('email',auth()->user()->email)->first();
        $post->agency_name = $agency->company_name;
        $post->agency_id = auth()->user()->id;
        $post->path = null;
        $post->scheduled_at = $request->input('scheduled_at');
        $post->status = 'Pending';

        $post->save();

        return redirect('/manage/posts/'.auth()->user()->id)->with('success','Post successfully submitted');
    }

    public function new_response(){
        return view('agencies.new_response');
    }

    public function store_response(Request $request){
        $this->validate($request,[
            'strategy'=>'required|string',
            'response'=>'required|String'
        ]);
    }
}
