<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Kelontong</title>
    <!-- css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/css/auth/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img src="assets/img/logo.png" alt="" class="bg-register">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card-register">
                    <h2 class="h2 text-center text-gray-900 mb-5 font-weight-bold">Sign up Now!</h2>
                    <form class="user">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <input type="text" class="form-control form-control-user" placeholder="First Name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <input type="text" class="form-control form-control-user" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address">
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <input type="password" class="form-control form-control-user" placeholder="Password">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <input type="password" class="form-control form-control-user" placeholder="Password Confirmation">
                            </div>
                        </div>
                        <button class="btn btn-login btn-user btn-block mt-4">
                            Register
                        </button>
                    </form>
                    <div class="text-center mt-4">
                        <span class="small">Already have a Kelontong account? </span>
                        <label><a href="login.php" class="link-primary font-weight-bold small">Login</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>