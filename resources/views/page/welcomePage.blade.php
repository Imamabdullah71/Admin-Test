<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcomepagestyle.css') }}">
</head>

<body>

    <header>
        <img src="{{ asset('images/LogoKilau2.png') }}" alt="" class="logo-kilau">

        <i class="fa-solid fa-bars tombolbar"></i>

        <nav class="navtop">
            <a href="#" style="--i:1;">Home</a>
            <a href="#" style="--i:2;">Event</a>
            <a href="#" style="--i:3;">Venue</a>
            <a href="#" style="--i:4;">About</a>
            <a href="#" style="--i:5;">Contact</a>
        </nav>

        <i class="fa-solid fa-moon mode"></i>

        <div class="bg-navtop"></div>
    </header>

    <section class="home">
        <div class="contenthome">
            <h3>Lembaga<br><span>Kilau</span><br>Berbagi Teknologi</h3>
            <p>
                Kilau Indonesia merupakan lembaga yang bergerak di bidang kemanusiaan dan memiliki program-program seperti Berbagi Makan, Berbagi Pendidikan, Berbagi Kesejahteraan dan lain sebagainya. Di Bidang Berbagi Teknologi Kilau berjalan di bidang Informasi dan Teknologi, untuk mengatur struktural secara digital. Menggunakan Website maupun Andriod. Di zaman yang serba canggih sekarang ini sudah tidak aneh rasanya dengan dunia digital, Smartphone seperti sudah menjadi kebutuhan pokok.
            </p>
            <a href="{{ route('login') }}" class="tombol"><span></span>Masuk ke Login</a>
            <div class="iconsosmed">
                <a href="#" style="--i:14;"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" style="--i:15;"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/kilauonline/?hl=id" target="_blank" style="--i:16;"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

        <div class="gambar">
            <img src="{{ asset('images/LogoKilau3.png') }}" alt="" class="siluet-kilau">
            <img src="{{ asset('images/LogoKilau2.png') }}" alt="" class="logokilau2">
        </div>
        <img src="{{ asset('images/boderkilau.png') }}" alt="" class="border">
    </section>

    {{-- <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <div class="container d-flex justify-content-center">
            <h1 class="display-4 pb-5"><b>Selamat Datang</b></h1>
        </div>
        <div class="container d-flex justify-content-center">
            <a href="{{ route('login') }}" class="btnmsk">Masuk ke Login</a>
        </div>
    </div> --}}

    {{-- <div class="container">
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
    </div> --}}

    <script src="{{ asset('javascript/welcomepage.js') }}"></script>
    <!-- Bootstrap JS (jquery and popper.js are required for Bootstrap) -->

</body>

</html>
