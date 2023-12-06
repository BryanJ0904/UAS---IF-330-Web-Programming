<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <div class="rows atas">
        <div class="col-3 tes">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/"><img class="logo" src="images/logo.png"/></a>
            </nav>
        </div>
        <div class="col-7 tes">
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"><b>Beranda</b></a>
                        </li>
                        <li class="nav-item">   
                            <a class="nav-link" href="produk"><b>Produk</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about"><b>Tentang Kami</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-2 tes">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="login">
                    <button class="loginbtn">LOGIN</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('content')
</body>

</html>