<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .carousel-inner img {
            object-fit: cover;
            width: 900px;
            height: 500px;
        }
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <div class="container d-flex justify-content-center">
            <h1 class="display-4"><b>Selamat Datang</b></h1>
        </div>
        <div class="container d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btn btn-success">Masuk ke Login</a>
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/kilau3.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption">
                        <h3>Kilau Indonesia</h3>
                        <p>Cabang Sumedang</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/kilau2.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption">
                        <h3>Judul Slide 2</h3>
                        <p>Deskripsi slide 2 berada di sini.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/kilau1.png') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption">
                        <h3>Judul Slide 3</h3>
                        <p>Deskripsi slide 3 berada di sini.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Bootstrap JS (jquery and popper.js are required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
