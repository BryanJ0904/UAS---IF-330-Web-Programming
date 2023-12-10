<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="icon" href ="img/logo.jpg" type = "image/x-icon">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('main.css') }}" />
</head>

<body>
    <div class="rows atas">
        <div class="d-flex align-items-center col-6 col-lg-2">
            <img class="logo" src="images/logo.png"/>
        </div>
        <div class="col-4 col-lg-8">
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"><b>Beranda</b></a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" href="/produk"><b>Produk</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about"><b>Tentang Kami</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-2 d-flex justify-content-center align-items-center">
            @if(session('username'))
            <div class="dropdown show">
                <a class="text-decoration-none" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex align-items-center">{{ session('username') }} <i class="ml-2 fas fa-caret-down"></i></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item text-dark d-lg-none" href="/">Beranda</a>
                    <a class="dropdown-item text-dark d-lg-none" href="/produk">Produk</a>
                    <a class="dropdown-item text-dark d-lg-none" href="/about">Tentang Kami</a>
                    <a class="dropdown-item text-dark" href="{{ url('/logout') }}">Logout</a>
                    <a class="dropdown-item text-dark" href="{{ url('/crud') }}">CRUD</a>
                </div>
            </div>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>{{ session('username') }}</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="ddlogout"><a href="{{ url('/logout') }}">Logout</a></li>
                            <li class="ddlogout"><a href="{{ url('/crud') }}">CRUD</a></li>
                        </ul>
                    </li> -->
            @else
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="login">
                        <button class="loginbtn">LOGIN</button>
                    </a>
                </div>
            </nav>
            <div class="dropdown d-lg-none">
            <div class="dropdown show">
                <a class="text-decoration-none" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex align-items-center">Menu<i class="ml-2 fas fa-caret-down"></i></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item text-dark" href="/">Beranda</a>
                    <a class="dropdown-item text-dark" href="/produk">Produk</a>
                    <a class="dropdown-item text-dark" href="/about">Tentang Kami</a>
                    <a class="dropdown-item text-dark" href="/login">Login/Register</a>
                </div>
            </div>
            </div>
            </div>
            @endif
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('content')
</body>

</html>