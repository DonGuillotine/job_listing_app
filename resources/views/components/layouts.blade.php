<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Find and Post Programming jobs here" />
    <meta name="author" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/flash.min.css') }}" />

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>Find Jobs</title>
</head>
<body>
        <!-- ==================== Start Loading ==================== -->

        <div class="loading">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    
        <div id="preloader">
        </div>
    
        <!-- ==================== End Loading ==================== -->
    
    
    
        <!-- ==================== Start progress-scroll-button ==================== -->
    
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    
        <!-- ==================== End progress-scroll-button ==================== -->
    
    
    
        <!-- ==================== Start cursor ==================== -->
    
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
    
        <!-- ==================== End cursor ==================== -->
    
    
    
        <!-- ==================== Start Navbar ==================== -->
    
        <nav class="navbar navbar-expand-lg">
            <div class="container">
    
                <!-- Logo -->
                <a class="logo" href="/">
                    <img src="{{ asset('img/logo-light.png') }}" alt="logo">
                </a>
    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"><i class="fas fa-bars"></i></span>
                </button>
    
                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/manage">Manage Listings</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="javascript:void()">Welcome {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" class="inline" action="/logout">
                                @csrf
                                <button type="submit" class="mt-20"><span class="p-1 px-4 badge-dark">Logout</span></button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- ==================== End Navbar ==================== -->

       {{$slot}}
    
       <!-- ==================== Start Footer ==================== -->

       <footer class="sub-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p class="text-center">© 2022, All Rights reserved<a href="/"></a>.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-center">
                        <div class="copy-right">
                            <a href="/create_job" class="butn bord curve">Create Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <x-flash-messages />
    <!-- ==================== End Footer ==================== -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- plugins -->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="{{ asset('js/flash.min.js') }}"></script>
    <script src="{{ asset('js/flash.jquery.min.js') }}"></script>
    <script>
        $('document').ready(function () {

            $('.flash-message').flashjs({
                timeout: 5000,
                progress: true,
                theme: 'dark',
            });

        });
    </script>

    <!-- custom scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>