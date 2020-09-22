@extends('layouts.app')
@section('content')

<div class="row justify-content-md-around">

    <div class="col-12 col-md-6 col-lg-5 mb-5 mb-lg-0">
        <div class="card bg-primary shadow-soft border-light p-4">
            <div class="card-header text-center pb-0">
                <h2 class="mb-0 h5">Become a Partner</h2>                               
            </div>
            <div class="card-body">
                <form action="">
                    <!-- Form -->
                    <div action="{{url('/createAgency')}}" method="POST">
                        <label for="exampleInputIcon999">Name</label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_lLvJxb.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay></lottie-player>
                                </span>
                            </div>
                            <input class="form-control" id="exampleInputIcon999" placeholder="name" type="text" aria-label="name">
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
                            <input class="form-control" id="exampleInputIcon999" placeholder="Company Name" type="text" aria-label="company_name">
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
                            <input class="form-control" id="exampleInputIcon999" placeholder="example@company.com" type="text" aria-label="email adress">
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
                            <input class="form-control" id="exampleInputIcon999" placeholder="www.example.com" type="text" aria-label="email adress">
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
                            <input class="form-control" id="exampleInputIcon999" placeholder="Description" type="text" aria-label="email adress">
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
                            <input class="form-control" id="exampleInputIcon999" placeholder="Portfolio" type="text" aria-label="email adress">
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
                                <input class="form-control" id="exampleInputPassword345" placeholder="Password" type="password" aria-label="Password" required="">
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
                                <input class="form-control" id="exampleConfirmPassword712" placeholder="Confirm password" type="password" aria-label="Password" required="">
                            </div>
                        </div>
                        <!-- End of Form -->
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign in</button>
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