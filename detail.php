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
    <link href="assets/css/lightslider.css" rel="stylesheet">
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
    <!-- Lightslider -->
    <script src="assets/js/lightslider.js"></script>
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

    <!-- Detail Produk -->
    <div class="container space-carousel">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <nav aria-label="breadcrumb" style="margin-top: 1.5rem;">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="#" class="link-breadcrumb">Kelontong</a></li>
                        <li class="breadcrumb-item"><a href="#" class="link-breadcrumb">Buah</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Buah Anggur 1 Kg</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="clearfix">
                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                        <li data-thumb="assets/img/anggur.jpg">
                            <img src="assets/img/anggur.jpg" class="img-gallery" />
                        </li>
                        <li data-thumb="assets/img/apel.jpg">
                            <img src="assets/img/apel.jpg" class="img-gallery" />
                        </li>
                        <li data-thumb="assets/img/kedondong.jpg">
                            <img src="assets/img/kedondong.jpg" class="img-gallery" />
                        </li>
                        <li data-thumb="assets/img/pisang.jpg">
                            <img src="assets/img/pisang.jpg" class="img-gallery" />
                        </li>
                        <li data-thumb="assets/img/wortel.jpg">
                            <img src="assets/img/wortel.jpg" class="img-gallery" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <h2 class="h2 product-name">Buah Anggur 1 Kg</h2>
                <div class="buy d-flex align-items-center">
                    <div class="rating-product mt-2">
                        <i class="far fa-star"></i>
                        4.5 Ulasan
                    </div>
                    <div class="info-product mt-2 mr-3 ml-3">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="info-product mt-2">
                        <span><i class="fas fa-shopping-basket"></i> 0 Produk Terjual</span>
                    </div>
                    <div class="info-product mt-2 mr-3 ml-3">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    <div class="info-product mt-2">
                        <span><i class="far fa-eye"></i> 100 Produk Dilihat</span>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="detail-price-real">Rp 100.000</p>
                    <h1 class="h1 detail-price">Rp 80.000</h1>
                    <span class="detail-sale">Hemat 20%</span>
                    <div class="row mt-4">
                        <div class="col-3 title-opsi">Kondisi</div>
                        <div class="col-9"><span class="detail-kondisi">Baru</span></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 title-opsi">Berat</div>
                        <div class="col-9">200 Gram</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 title-opsi">Stok</div>
                        <div class="col-9">200</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 title-opsi">Jumlah</div>
                        <div class="col-9">
                            <div class="number">
                                <span class="minus">-</span>
                                <input type="text" value="1" class="input-jumlah" />
                                <span class="plus">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-hr-info"></div>
                    <hr>
                </div>
                <div class="space-hr-info">
                    <button class="btn btn-keranjang mr-2"><i class="fas fa-cart-plus"></i> Masukkan Keranjang</button>
                    <button class="btn btn-beli">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5">

    <!-- Detail Info -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-5">
                <h3 class="title-info">Informasi Barang</h3>
            </div>
            <div class="col-md-7">
                <div class="mb-4">
                    <h5 class="title-info-detail">Kategori Barang</h5>
                    <p class="text-info-detail">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent" style="padding: 0;">
                                <li class="breadcrumb-item"><a href="#" class="link-breadcrumb">Kelontong</a></li>
                                <li class="breadcrumb-item"><a href="#" class="link-breadcrumb">Buah</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Buah Anggur 1 Kg</li>
                            </ol>
                        </nav>
                    </p>
                </div>
                <div class="mb-4">
                    <h5 class="title-info-detail">Deskripsi Produk</h5>
                    <p class="text-info-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto possimus molestias repudiandae qui dicta porro, non quia tempore? Quam, doloremque. Error esse voluptas minima ut deserunt necessitatibus aperiam magnam. Nesciunt!</p>
                    <img src="assets/img/anggur.jpg" alt="" class="img-info-detail">
                    <p class="text-info-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto possimus molestias repudiandae qui dicta porro, non quia tempore? Quam, doloremque. Error esse voluptas minima ut deserunt necessitatibus aperiam magnam. Nesciunt!</p>
                    <p class="text-info-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto possimus molestias repudiandae qui dicta porro, non quia tempore? Quam, doloremque. Error esse voluptas minima ut deserunt necessitatibus aperiam magnam. Nesciunt!</p>
                    <p class="text-info-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto possimus molestias repudiandae qui dicta porro, non quia tempore? Quam, doloremque. Error esse voluptas minima ut deserunt necessitatibus aperiam magnam. Nesciunt!</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-5">
                <h3 class="title-info">Ulasan Barang</h3>
            </div>
            <div class="col-md-7">
                <div class="mb-4">
                    <h5 class="title-info-detail">Daftar Ulasan</h5>
                    <button class="btn btn-sm btn-rating active"><i class="fas fa-star"></i> <span class="rating-star">5</span></button>
                    <button class="btn btn-sm btn-rating"><i class="fas fa-star"></i> <span class="rating-star">4</span></button>
                    <button class="btn btn-sm btn-rating"><i class="fas fa-star"></i> <span class="rating-star">3</span></button>
                    <button class="btn btn-sm btn-rating"><i class="fas fa-star"></i> <span class="rating-star">2</span></button>
                    <button class="btn btn-sm btn-rating"><i class="fas fa-star"></i> <span class="rating-star">1</span></button>
                    <div class="review-item mt-4">
                        <div class="review-item-head">
                            <div class="review-item-head-content">
                                <img src="assets/img/rating_5.png" alt="" class="img-rating-star">
                                <h5 class="h5 title-rating">Barang Bagus Banget!</h5>
                                <small class="time-rating">Ditulis 27 Desember 202</small>
                                <p class="text-rating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda voluptas magnam animi rem a quis, similique eos at quidem dolorum reprehenderit est id iste in, blanditiis ipsam quae fugiat?</p>
                            </div>
                            <div class="testi-image">
                                <img src="assets/img/anggur.jpg" alt="" class="img-testi">
                            </div>
                        </div>
                        <div class="review-item-user">
                            <img src="assets/img/user.jpg" alt="" class="review-user">
                            <span class="ml-1">Dede</span>
                        </div>
                        <hr>
                    </div>
                    <div class="review-item mt-4">
                        <div class="review-item-head">
                            <div class="review-item-head-content">
                                <img src="assets/img/rating_4.png" alt="" class="img-rating-star">
                                <h5 class="h5 title-rating">Barang Bagus Banget!</h5>
                                <small class="time-rating">Ditulis 27 Desember 202</small>
                                <p class="text-rating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda voluptas magnam animi rem a quis, similique eos at quidem dolorum reprehenderit est id iste in, blanditiis ipsam quae fugiat?</p>
                            </div>
                            <div class="testi-image">
                                <img src="assets/img/anggur.jpg" alt="" class="img-testi">
                            </div>
                        </div>
                        <div class="review-item-user">
                            <img src="assets/img/user.jpg" alt="" class="review-user">
                            <span class="ml-1">Dede</span>
                        </div>
                        <hr>
                    </div>
                    <div class="review-item mt-4">
                        <div class="review-item-head">
                            <div class="review-item-head-content">
                                <img src="assets/img/rating_3.png" alt="" class="img-rating-star">
                                <h5 class="h5 title-rating">Barang Bagus Banget!</h5>
                                <small class="time-rating">Ditulis 27 Desember 202</small>
                                <p class="text-rating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda voluptas magnam animi rem a quis, similique eos at quidem dolorum reprehenderit est id iste in, blanditiis ipsam quae fugiat?</p>
                            </div>
                            <div class="testi-image">
                                <img src="assets/img/anggur.jpg" alt="" class="img-testi">
                            </div>
                        </div>
                        <div class="review-item-user">
                            <img src="assets/img/user.jpg" alt="" class="review-user">
                            <span class="ml-1">Dede</span>
                        </div>
                        <hr>
                    </div>
                    <div class="review-item mt-4">
                        <div class="review-item-head">
                            <div class="review-item-head-content">
                                <img src="assets/img/rating_2.png" alt="" class="img-rating-star">
                                <h5 class="h5 title-rating">Barang Bagus Banget!</h5>
                                <small class="time-rating">Ditulis 27 Desember 202</small>
                                <p class="text-rating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda voluptas magnam animi rem a quis, similique eos at quidem dolorum reprehenderit est id iste in, blanditiis ipsam quae fugiat?</p>
                            </div>
                            <div class="testi-image">
                                <img src="assets/img/anggur.jpg" alt="" class="img-testi">
                            </div>
                        </div>
                        <div class="review-item-user">
                            <img src="assets/img/user.jpg" alt="" class="review-user">
                            <span class="ml-1">Dede</span>
                        </div>
                        <hr>
                    </div>
                    <div class="review-item mt-4">
                        <div class="review-item-head">
                            <div class="review-item-head-content">
                                <img src="assets/img/rating_1.png" alt="" class="img-rating-star">
                                <h5 class="h5 title-rating">Barang Bagus Banget!</h5>
                                <small class="time-rating">Ditulis 27 Desember 202</small>
                                <p class="text-rating">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima assumenda voluptas magnam animi rem a quis, similique eos at quidem dolorum reprehenderit est id iste in, blanditiis ipsam quae fugiat?</p>
                            </div>
                            <div class="testi-image">
                                <img src="assets/img/anggur.jpg" alt="" class="img-testi">
                            </div>
                        </div>
                        <div class="review-item-user">
                            <img src="assets/img/user.jpg" alt="" class="review-user">
                            <span class="ml-1">Dede</span>
                        </div>
                        <hr>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Produk Terkait -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2 text-gray-900 font-weight-bold header-product h2-border">
                    Produk Terkait
                </h2>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 mt-5">
                        <div class="card">
                            <span class="diskon">
                                <div class="label-diskon bg-danger">
                                    -25%
                                </div>
                            </span>
                            <span class="like">
                                <div class="label-like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </span>
                            <div class="img-wrap">
                                <img class="card-img" src="assets/img/anggur.jpg" alt="Vans">
                            </div>
                            <a href="#" class="link-product">
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
                            <span class="diskon">
                                <div class="label-diskon bg-danger">
                                    -35%
                                </div>
                            </span>
                            <span class="like">
                                <div class="label-like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </span>
                            <div class="img-wrap">
                                <img class="card-img" src="assets/img/pisang.jpg" alt="Vans">
                            </div>
                            <a href="#" class="link-product">
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
                            <span class="diskon">
                                <div class="label-diskon bg-danger">
                                    -15%
                                </div>
                            </span>
                            <span class="like">
                                <div class="label-like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </span>
                            <div class="img-wrap">
                                <img class="card-img" src="assets/img/kedondong.jpg" alt="Vans">
                            </div>
                            <a href="#" class="link-product">
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
                            <span class="diskon">
                                <div class="label-diskon bg-danger">
                                    -25%
                                </div>
                            </span>
                            <span class="like">
                                <div class="label-like">
                                    <i class="far fa-heart"></i>
                                </div>
                            </span>
                            <div class="img-wrap">
                                <img class="card-img" src="assets/img/apel.jpg" alt="Vans">
                            </div>
                            <a href="#" class="link-product">
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
                <div class="text-center">
                    <a href="#" class="btn btn-view btn-user mt-4">
                        Lihat Semua
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="space-hr">

    <!-- Footer -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <h5 class="h5">Kelontong</h5>
                <ul class="footer-ul">
                    <li class="footer-item">
                        <a href="#" class="footer-link">Tentang Kami</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Kebijakan Privasi</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Testimoni</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Syarat Ketentuan</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="h5">Bantuan</h5>
                <ul class="footer-ul">
                    <li class="footer-item">
                        <a href="#" class="footer-link">Kontak Kami</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Cara Belanja</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Pengiriman</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="h5">Pembayaran</h5>
                <ul class="footer-ul">
                    <li class="footer-item">
                        <a href="#" class="footer-link"><span><img src="assets/img/icon-dana.png" alt="" style="width: 20px; margin-top:-3px;"></span> DANA</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link"><span><img src="assets/img/icon-gopay.png" alt="" style="width: 20px; margin-top:-3px;"></span> GOPAY</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link"><span><img src="assets/img/icon-ovo.png" alt="" style="width: 20px; margin-top:-3px;"></span> OVO</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="h5">Ikuti Kami</h5>
                <ul class="footer-ul">
                    <li class="footer-item">
                        <a href="#" class="footer-link"><i class="fab fa-facebook-square"></i> Facebook</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link"><i class="fab fa-instagram"></i> Instagram</a>
                    </li>
                    <li class="footer-item">
                        <a href="#" class="footer-link"><i class="fab fa-twitter-square"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/img/logo.png" alt="" class="bg-footer">
                </div>
            </div>
            <footer class="mt-5">
                <p class="copyright">Copyright © Kelontong 2020</p>
            </footer>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 4,
                pauseOnHover: true,
                slideMargin: 20,
                speed: 500,
                controls: true,
                // auto:true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        })
    </script>
</body>

</html>