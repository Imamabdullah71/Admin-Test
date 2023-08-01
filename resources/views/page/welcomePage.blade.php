<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcomepagestyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header>
        <img src="{{ asset('images/LogoKilau.png') }}" alt="" class="logo-kilau">

        <nav class="navtop">
            <a href="#">Home</a>
            <a href="#">Event</a>
            <a href="#">Venue</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>

        <i class="fa-solid fa-moon mode"></i>
    </header>

    <section class="home">
        <div class="contenthome">
            <h3>Lembaga<br><span>Kilau</span><br>Berbagi Teknologi</h3>
            <p>
                Jules Bianchi (1989–2015) adalah seorang pembalap mobil profesional dari Prancis. Ia pernah berkompetisi dalam ajang Formula Satu (F1) pada musim 2013 dan 2014 bersama tim Marussia. Bianchi memulai karier membalapnya pada usia 10 tahun dengan mengikuti kejuaraan gokar di Prancis dan berhasil meraih beberapa kesuksesan awal, di antaranya menjadi juara Kejuaraan Junior Prancis dan peringkat kedua dalam Kejuaraan Junior Eropa pada tahun 2004. Selanjutnya, ia mengikuti berbagai ajang kejuaraan junior seperti Formula 3 Euro Series, Seri GP2 dan Formula Renault 3.5. Pada tahun 2009, Bianchi menjadi pembalap pertama yang bergabung dengan Akademi Pembalap Ferrari, sebuah program pembinaan pembalap dari tim Scuderia Ferrari yang bertujuan untuk mendidik seorang pembalap muda untuk nantinya bisa berkiprah
            </p>
            <a href="#" class="tombol"><span></span>Read More</a>
            <div class="iconsosmed">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
</body>

</html>
