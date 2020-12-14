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
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white">
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
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="assets/img/slider-1.jpg" class="img-slider" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/slider-2.jpg" class="img-slider" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/slider-3.jpg" class="img-slider" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/slider-4.jpg" class="img-slider" alt="">
                </div>
                <div class="item">
                    <img src="assets/img/slider-5.jpg" class="img-slider" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Owl Carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: false,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1,
                    stagePadding: 80
                },
                1000: {
                    items: 1,
                    stagePadding: 150
                },
                1200: {
                    items: 1,
                    stagePadding: 150
                },
                1400: {
                    items: 1,
                    stagePadding: 200
                },
                1600: {
                    items: 1,
                    stagePadding: 350
                },
                1800: {
                    items: 1,
                    stagePadding: 400
                }
            }
        })
    </script>
</body>

</html>