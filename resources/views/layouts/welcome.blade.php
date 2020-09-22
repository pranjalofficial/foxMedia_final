<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Staatliches&display=swap" rel="stylesheet">

    <style>
        .sidenav {
            width: 190px;
            position: fixed;
            z-index: 1;
            top: 80px;
            left: 30px;
            background: #eee;
            overflow-x: hidden;
            padding: 8px 0;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 17px;
            color: #2196F3;
            display: block;
        }

        .sidenav a:hover {
            color: #064579;
        }

        .main {
            margin-left: 210px; /* Same width as the sidebar + left position in px */
            /* font-size: 18px; Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</head>
<body>
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="#">
               The FOX Media
            </a>
            <div class="d-flex align-items-center">
                <a href="{{url('/logins')}}" target="_blank" class="btn btn-primary d-none d-md-inline-block"><i class="fa fa-book"></i>Log In</a>
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
            @yield('content')

            <footer class="footer content-desktop d-flex flex-column flex-md-row border-top border-light bg-primary justify-content-md-around text-center">
                <div><a href="/about_us">About us</a></div>
                <div><a href="/process">The Process</a></div>
                <div><a href="/partner">Become a Partner</a></div>
                <div>Terms and Conditions</div>
                <div><a href="/contact_us">Contact Us</a></div>
            </footer>
            <div class="icon-bar footermb content-mobile border-top border-light bg-primary">
                <a class="btn" href="/about_us"><i class="fas fa-info"></i></a>
                <a href="/process"><i class="fas fa-list-ul"></i></a>
                <a href="/partner"><i class="fas fa-paper-plane"></i></a>
                <a href="#"><i class="fas fa-file-alt"></i></a>
                <a href="/contact_us"><i class="fas fa-phone"></i></a>
              </div>
            
</body>
</html>
