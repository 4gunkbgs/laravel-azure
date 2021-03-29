<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="icon" href="{{ asset('img/1.png') }}" type="image/png">

    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <!-- Navbar 1-->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col">
                <div class="navbar-nav mr-auto">
                    <p class="h1 text-white">Menghitung Deret Fibonacci & Baris Aritmatika</p>
                </div>
            </nav>
        </div>
        <!-- Akhir Navbar 1 -->

        <!-- Navbar 2 -->
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <h5><a class="nav-item nav-link text-dark" href="/">Beranda</a></h5>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Akhir Navbar 2 -->
    </div>
    <!-- Akhir Container -->

    <!-- Konten -->
    @yield('konten')
    <!-- Akhir Konten -->

    <hr>
    <!-- footer-->
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
                <p>&copy AgungB 2021</p>
            </div>
            <div class="sosial col-lg-3">
                <a href="#"><i class="fab fa-instagram mr-4"></i></a>
                <a href="#"><i class="fab fa-facebook mr-4"></i></a>
                <a href="#"><i class="far fa-envelope-open mr-4"></i></a>
                <a href="#"><i class="fab fa-discord mr-4"></i></a>
            </div>
        </div>
    </div>
    <!-- akhir footer-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>

