<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    <title>Compass News</title>
</head>

<body>
    <div class="py-1 bg-white text-blue">
        <div class="d-flex justify-content-end bd-highlight container">

            <div class="p-2 bd-highlight">
                <a href="https://www.google.com/maps/@-6.8678439,107.605137,9z?entry=ttu" class="text-12px text-blue"><button type="button" class="btn btn-dark">Sign Up</button></a>
            </div>
            <div class="p-2 bd-highlight">
            @guest
                <a href="https://www.google.com/maps/@-6.8678439,107.605137,9z?entry=ttu" class="text-12px text-blue"><button type="button" class="btn btn-dark">Sign Up</button></a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="contact.html" class="text-12px text-blue"><button type="button" class="btn btn-info">Sign In</button></a>
            </div>
            @else    
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                        <div><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
</div>
</div>
</div>
                @endguest
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-red bg-red sticky-top">
        <div class="container ms-auto">
            <a class="navbar-brand font-bold" href="index.html"><h1>Compass News</h1></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><button type="button" class="btn btn-primary">beranda</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news"><button type="button" class="btn btn-primary">News</button></a>
                    </li>
                    
                </ul>


            </div>
        </div>
    </nav>




    
    <div class="container">
        @yield('content')
    </div>
    
       <footer>
    <div class="card-top">
        <div class="card-body">
            <div class="container text-center">
                <span>This website was created by <a href="https://www.instagram.com/vncnt_ru/">Vincent Rahadian Utama</a></span>
            </div>
        </div>
    </div>
   </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->  
</body>

</html>