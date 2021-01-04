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
    <link href="assets/css/floating-labels.css" rel="stylesheet">
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

    <div class="container space-order">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="card-form-order">
                    <div class="card-form-head">
                        <h3 class="title-form">Detail Transaksi</h3>
                    </div>
                    <div class="form-order">
                        <div class="card-list-order">
                            <img src="assets/img/anggur.jpg" alt="" class="img-list-order">
                            <h4 class="name-list-order">Anggur Impor 1 Kg</h4>
                            <div class="list-order">
                                <div>
                                    <div class="note-list-order"><span>Catatan : </span>Pakai Buble Wrap</div>
                                </div>
                                <div class="space-price">
                                    <div class="price-list-order">Rp 60.000 x 3</div>
                                    <div class="final-price-list-order">Rp 180.000</div>
                                </div>

                            </div>
                        </div>
                        <div class="card-list-order">
                            <img src="assets/img/kedondong.jpg" alt="" class="img-list-order">
                            <h4 class="name-list-order">Kedondong Lokal 1 Kg</h4>
                            <div class="list-order">
                                <div>
                                    <div class="note-list-order"><span>Catatan : </span>-</div>
                                </div>
                                <div class="space-price">
                                    <div class="price-list-order">Rp 80.000 x 3</div>
                                    <div class="final-price-list-order">Rp 240.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-form-order">
                    <div class="card-form-head">
                        <h3 class="title-form">Form Order</h3>
                    </div>
                    <div class="form-order">
                        <form>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="inputAlamat" class="form-control" placeholder="Alamat Sebagai" required>
                                        <label for="inputAlamat">Alamat Sebagai</label>
                                        <small class="form-text text-muted">
                                            Contoh : Kantor, Rumah, Kos, Dll
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="inputNama" class="form-control" placeholder="Nama Penerima" required>
                                        <label for="inputNama">Nama Penerima</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                                        <label for="inputEmail">Email</label>
                                        <small class="form-text text-muted">
                                            Contoh : jhon@gmail.com
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="inputNoHp" class="form-control" placeholder="No Telepon" required>
                                        <label for="inputNoHp">No Telepon</label>
                                        <small class="form-text text-muted">
                                            Contoh : 08xxxxxxxxxx
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mb-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputProvinsi" style="padding-left: 5px;">Provinsi</label>
                                        <select id="inputProvinsi" class="form-control">
                                            <option>Pilih Provinsi</option>
                                            <option>Yogyakarta</option>
                                            <option>Jakarta</option>
                                            <option>Bandung</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputKabupaten" style="padding-left: 5px;">Kabupaten/Kota</label>
                                        <select id="inputKabupaten" class="form-control">
                                            <option>Pilih Kabupaten</option>
                                            <option>Sleman</option>
                                            <option>Bantul</option>
                                            <option>Kulon Progo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-label-group">
                                        <input type="text" id="inputKecamatan" class="form-control" placeholder="Kecamatan" required>
                                        <label for="inputKecamatan">Kecamatan</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label-group">
                                        <input type="text" id="inputDesa" class="form-control" placeholder="Desa/Kelurahan" required>
                                        <label for="inputDesa">Desa/Kelurahan</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label-group">
                                        <input type="text" id="inputKode" class="form-control" placeholder="ZIP Code / Kode Pos" required>
                                        <label for="inputKode">ZIP Code / Kode Pos</label>
                                    </div>
                                </div>
                            </div>
                            <label style="padding-left: 5px;">Metode Pembayaran</label>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label class="label-pay">
                                        <input type="radio" name="radioname" value="Dana" />
                                        <div class="div-pay">
                                            <div class="name-pay">Dana</div>
                                            <img src="assets/img/icon-dana.png" alt="" class="img-pay">
                                        </div>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="label-pay">
                                        <input type="radio" name="radioname" value="Gopay" />
                                        <div class="div-pay">
                                            <div class="name-pay">Gopay</div>
                                            <img src="assets/img/icon-gopay.png" alt="" class="img-pay">
                                        </div>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="label-pay">
                                        <input type="radio" name="radioname" value="Ovo" />
                                        <div class="div-pay">
                                            <div class="name-pay">Ovo</div>
                                            <img src="assets/img/icon-ovo.png" alt="" class="img-pay">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card-form-order">
                    <div class="card-form-head">
                        <h3 class="title-form">Ringkasan Order</h3>
                    </div>
                    <div class="card-total-price">
                        <div class="cart-other">
                            <div class="note">
                                <h4 class="text-total">Total Belanja</h4>
                            </div>
                            <div class="note">
                                <h4 class="price-detail-order">Rp 150.000</h4>
                            </div>
                        </div>
                        <div class="cart-other">
                            <div class="note">
                                <h4 class="text-total">Biaya Pengiriman</h4>
                            </div>
                            <div class="note">
                                <h4 class="price-detail-order">Rp 0</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="cart-other">
                            <div class="note">
                                <h4 class="text-total font-weight-bold">Total Tagihan</h4>
                            </div>
                            <div class="note">
                                <h4 class="price-detail-order">Rp 150.000</h4>
                            </div>
                        </div>
                        <button class="btn btn-order text-center">
                            Bayar Sekarang
                        </button>
                    </div>
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
</body>

</html>