@extends('layouts.welcome')
@section('content')
@include('layouts.messages')

<div id="app">
    <main class="">
        <section class="section container  bg-soft pb-5 overflow-hidden">
            <div class="z-2">
                <div class="row justify-content-center text-center pt-6">
                    <div class="col-lg-8 col-xl-8">
                      <h1 class="display-2 mb-3"><img src={{ asset('img/logo1.png') }} alt="Fox Media Logo" style="margin-top: 10vh;top: 50%;-ms-transform: translateY(-50%);transform: translateY(-50%);"></h1>                       
                    </div>
                </div>
            </div>
            <div class="card-body pt-2 px-0 px-lg-7" style="-ms-transform: translateY(-30%);transform: translateY(-30%);">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <form action="/sendmail" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <h2 id="emailHelp" class="form-text text-muted text-center">Get your customised <strong>Digital Marketing</strong>  Strategy.</h2>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter your email here">                                     
                                        <div class="text-center" style="margin:10px;">
                                            <button type="submit" class="btn btn-lg btn-primary">Now!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
            </div>
           
        </section>
        
    </main>
    
</div>

@endsection