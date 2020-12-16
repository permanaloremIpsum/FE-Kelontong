<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelontong</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="assets/css/base/style.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Owl Carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Style Own -->
    <script src="assets/js/style.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo-nav.png" width="40" height="40" alt="">
            <span class="brand-logo"> Kelontong </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 d-inline w-100">
                <div class="search-box mt-2 mb-2">
                    <input type="text" placeholder="Cari kebutuhan keseharian kamu disini...">
                    <button class="btn btn-custom" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <!-- Sebelum Login -->
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3 mt-2 mb-2">
                    <a href="" class="btn btn-login">Login</a>
                </li>
                <li class="nav-item  mt-2 mb-2">
                    <a href="" class="btn btn-register">Register</a>
                </li>
            </ul> -->

            <!-- Setelah Login -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow mx-1 mr-3 mt-2 mb-2">
                    <a href="#" class="btn btn-cart dropdown-toggle" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class=" fas fa-shopping-cart"></i>
                        <span class="badge badge-danger badge-counter">5</span>
                    </a>
                </li>
                <li class="nav-item mr-3 mt-2 mb-2 pt-2 nav-space">
                    |
                </li>
                <!-- User -->
                <li class="nav-item dropdown no-arrow mt-2 mb-2">
                    <a href="#" class="btn btn-sm btn-user logged-name pt-2 dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-1 d-none d-lg-inline "> Dede Permana</span>
                        <img src=" assets/img/default-user.png" alt="" width="25" class="rounded-circle">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="container-fluid space-carousel">
        <div class="row">
            <div class="owl-carousel owl-theme" id="owl-carousel">
                <div class="item item-header">
                    <img src="assets/img/slider-1.jpg" class="img-slider" alt="">
                </div>
                <div class="item item-header">
                    <img src="assets/img/slider-2.jpg" class="img-slider" alt="">
                </div>
                <div class="item item-header">
                    <img src="assets/img/slider-3.jpg" class="img-slider" alt="">
                </div>
                <div class="item item-header">
                    <img src="assets/img/slider-4.jpg" class="img-slider" alt="">
                </div>
                <div class="item item-header">
                    <img src="assets/img/slider-5.jpg" class="img-slider" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Kategori -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="h2 text-gray-900 mb-4 font-weight-bold">Kategori Pilihan</h2>
                <div class="owl-carousel" id="owl-carousel-kategori">
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/buah.png" class="img-kategori" alt="">
                                <h6>Buah</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/sayuran.png" class="img-kategori" alt="">
                                <h6>Sayuran</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/beras.png" class="img-kategori" alt="">
                                <h6>Beras</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/gula.png" class="img-kategori" alt="">
                                <h6>Gula</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/minuman.png" class="img-kategori" alt="">
                                <h6>Minuman</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/bumbu.png" class="img-kategori" alt="">
                                <h6>Bumbu</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/mie.png" class="img-kategori" alt="">
                                <h6>Mie Instant</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon-card">
                            <a href="#" class="link-kateogri">
                                <img src="assets/img/kategori-lain.png" class="img-kategori" alt="">
                                <h6>Kategori Lain</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Flash Sale -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2 text-gray-900 font-weight-bold header-product">
                    Flash Sale
                    <span class="text-flash">Berakhir Dalam </span>
                    <div id="countdown" class="countdown"></div>
                    <a href="#" class="link-flash">Lihat Semua</a>
                </h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/anggur.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Anggur 1 Kg</h4>
                                    <h4 class="card-price">Rp 60.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -35%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/pisang.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Pisang 1 Kg</h4>
                                    <h4 class="card-price">Rp 70.000</h4>
                                    <h4 class="card-real-price">Rp 120.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -15%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/kedondong.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah kedondong 1 Kg</h4>
                                    <h4 class="card-price">Rp 50.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/apel.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Apel 1 Kg</h4>
                                    <h4 class="card-price">Rp 80.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Terlaris -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2 text-gray-900 font-weight-bold header-product">
                    Produk Terlaris
                </h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/anggur.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Anggur 1 Kg</h4>
                                    <h4 class="card-price">Rp 60.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -35%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/pisang.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Pisang 1 Kg</h4>
                                    <h4 class="card-price">Rp 70.000</h4>
                                    <h4 class="card-real-price">Rp 120.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -15%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/kedondong.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah kedondong 1 Kg</h4>
                                    <h4 class="card-price">Rp 50.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/apel.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Apel 1 Kg</h4>
                                    <h4 class="card-price">Rp 80.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/anggur.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Anggur 1 Kg</h4>
                                    <h4 class="card-price">Rp 60.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -35%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/pisang.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Pisang 1 Kg</h4>
                                    <h4 class="card-price">Rp 70.000</h4>
                                    <h4 class="card-real-price">Rp 120.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -15%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/kedondong.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah kedondong 1 Kg</h4>
                                    <h4 class="card-price">Rp 50.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <a href="#" class="link-product">
                                <span class="diskon">
                                    <div class="label-diskon bg-danger">
                                        -25%
                                    </div>
                                </span>
                                <span class="like">
                                    <button href="#" class="btn btn-sm btn-outline-danger btn-like">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </span>
                                <div class="img-wrap">
                                    <img class="card-img" src="assets/img/apel.jpg" alt="Vans">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Buah Apel 1 Kg</h4>
                                    <h4 class="card-price">Rp 80.000</h4>
                                    <h4 class="card-real-price">Rp 100.000</h4>
                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="rating-product mt-2">
                                            <i class="far fa-star"></i>
                                            4.5
                                        </div>
                                        <a href="#" class="btn btn-sm btn-buy mt-2"><i class="fas fa-shopping-cart"></i> Beli</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Terbaru -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2 text-gray-900 font-weight-bold header-product">
                    Produk Terbaru
                </h2>
            </div>
        </div>
    </div>
</body>

</html>