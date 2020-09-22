@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-12 col-lg-12 mb-5">
            <!-- Contact Card -->
            <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="shadow-inset p-4 mb-5 rounded">
                                <iframe class="map rounded" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.551317295201!2d72.87151657827262!3d19.057676743573325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8bebca0e643%3A0xa1004b61d5954772!2sMumbai%2C%20Maharashtra%20400024!5e0!3m2!1sen!2sin!4v1600749815666!5m2!1sen!2sin"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 text-center mb-5">
                            <h1 class="display-2 mb-3">Get in touch today</h1>
                            <p class="lead">Have a new project in mind? Need help with an ongoing one? Drop us a line about your project needs, we answer same day.</p>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4 col-lg-4 text-center">
                            <!-- Visit Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets7.lottiefiles.com/temp/lf20_EVDaJ0.json"  background="transparent"  speed="1"  style="width: ; height: ;"  loop  autoplay></lottie-player>
                                </div>
                                <h2 class="h5 icon-box-title">Visit us</h2>
                                <span>
                                    25th cosmos CHS, Kurla East 
                                    <br>
                                    Mumbai - 400024
                                </span>
                            </div>
                            <!-- End of Visit Box -->
                        </div>
                        <div class="col-md-4 col-lg-4 text-center">
                            <!-- Call Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_PxOM0X.json"  background="transparent"  speed="1"  style="width: ; height: ;"  loop  autoplay></lottie-player>
                                </div>
                                <h2 class="h5 icon-box-title">Call</h2>
                                <span>+91-9892420447</span>
                                <div class="text-small text-gray">
                                    Mon - Fri, 8am - 4pm
                                </div>
                            </div>
                            <!-- End of Call Box -->
                        </div>
                        <div class="col-md-4 col-lg-4 text-center">
                            <!-- Email Box -->
                            <div class="icon-box mb-4">
                                <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_tDEN64.json"  background="transparent"  speed="1"  style="width: ; height: ;"  loop  autoplay></lottie-player>
                                </div>
                                <h2 class="h5 icon-box-title">Email</h2>
                                <a href="#">hello@thefoxmedia.in</a>
                                <br><a href="#"></a>
                            </div>
                            <!-- End of Email Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Contact Card -->
        </div>
    </div>
</div>
@endsection