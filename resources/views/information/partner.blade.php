@extends('layouts.app')
@section('content')

<div class="row justify-content-md-around">
    <div class="col-12 col-md-6 col-lg-5 mb-5 mb-lg-0">
        <div class="card bg-primary shadow-soft border-light p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <div class="card-header text-center pb-0">
                <h2 class="mb-0 h5">Become a Partner</h2>                               
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('/createAgency')}}">
                    <!-- Form -->
                    {{ csrf_field()}}
                    <div>
                        <label for="exampleInputIcon999">Name</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_lLvJxb.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="name" id="name" placeholder="name" type="text" value="" aria-label="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Company Name</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_T4B4be.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="company_name" id="company_name" placeholder="Company Name"  value="" type="text" aria-label="company_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Your email</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_8SdEu9.json"  background="transparent"  speed="1"  style="width:20px ; height:20px ;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="email" id="email"  placeholder="example@company.com" type="text" value="" aria-label="email adress">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Phone number</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_NYp9cT.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="phone" id="phone"  placeholder="Phone number" type="number" value="" aria-label="email adress">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Company Website</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_t5KSeU.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="company_website" id="company_website" placeholder="www.example.com" type="text" value="" aria-label="email adress">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Description</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_0PEZaV.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="description" id="description" placeholder="Description" type="text" value="" aria-label="email adress">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputIcon999">Portfolio</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_A7qgGq.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" name="portfolio" id="portfolio" placeholder="Portfolio" type="text" value="" aria-label="email adress">
                        </div>
                    </div>
                    <!-- End of Form -->
                    <div class="form-group">
                        <!-- Form -->
                        <div class="form-group">
                            <label for="exampleInputPassword345">Password</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets8.lottiefiles.com/datafiles/RvQQlJ3ODelSiQi/data.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                    </span>
                                </div>
                                <input class="form-control" name="password" id="password" placeholder="Password" type="password" value="" aria-label="Password" required="">
                            </div>
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group">
                            <label for="exampleConfirmPassword712">Confirm Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets8.lottiefiles.com/datafiles/RvQQlJ3ODelSiQi/data.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                    </span>
                                </div>
                                <input class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" type="password" aria-label="Password" required="">
                            </div>
                        </div>
                        <!-- End of Form -->
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign Up as a Partner!</button>
                </form>
                <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                    <span class="font-weight-normal">
                        Already have an account?
                        <a href="/logins" class="font-weight-bold">Login here</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection