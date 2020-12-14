<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Kelontong</title>
  <!-- css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="assets/css/auth/style.css" rel="stylesheet">
</head>

<body>
  <div class="container space-container-login">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <a href="#">
          <img src="assets/img/logo.png" alt="" class="bg-login">
        </a>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card-login">
          <h2 class="h2 text-center text-gray-900 mb-5 font-weight-bold">Welcome Back!</h2>
          <form class="user">
            <div class="form-group">
              <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address/Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
                <label style="float:right;"><a href="forgot-password.php" class="link-primary">Forgot Password?</a></label>
              </div>
            </div>
            <button class="btn btn-login btn-user btn-block">
              Login
            </button>
          </form>
          <div class="text-center mt-4">
            <span class="small">Don't have an account? </span>
            <label><a href="register.php" class="link-primary font-weight-bold small">Register</a></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>