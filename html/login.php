<?php session_start();?>
<?php if(!isset($_SESSION['status'])):?>
<?php $_SESSION['status']="Please Register and login";  ?>
<?php endif?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log in</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
  />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/adminlte.min.css"/>
    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="../css/vendor.css" />

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" href="../css/adminlte.css" />
  
    <!-- jQuery Library -->

  </head>
  <body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:650px">
      <!-- Brand Logo -->
      <a href="http://localhost/project3/html/login.php" class="brand-link">
        <img src="../images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mellow</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
  
        <!-- Sidebar Menu -->
        <nav class="mt-2" >
          <ul class="nav nav-pills nav-sidebar flex-column" style="color:white">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            
</ul>
              </nav>
          </aside>
    <div class="login-page">
      <div class="login-box" style="margin-left:250px">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <div class="login-logo">
              <a><b>Mellow</b></a>
            </div>
            <p class="login-box-msg">Sign in to start your session</p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <form
              action="http://localhost/project3/php/login.php"  
              method="POST"
              class="information-form"
              id="form"
              style="width: 400px"
            >
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  id="inputUsername"
                  name="username"
                  placeholder="Username"
                  required
                  style="width:400px"
                />
              </div>

              <!--<div id="error-msg2" class="error2"></div>-->
              <div
                class="form-group"
              >
                <input
                  type="password"
                  class="form-control"
                  id="inputPassword"
                  name="password"
                  placeholder="Password"
                  required
                  style="width:400px"
                />
              </div>
              <!--<div id="error-msg" class="error"></div>-->
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember" value=1 />
                    <label for="remember"> Remember Me </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <input type="submit" class="btn btn-primary btn-block " id="sbmit" value="Sign In">
                </div>
                <!-- /.col -->
              </div>
            </form>

            <p class="mb-1">
              <a href="forgot-password.php">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a href="register.php" class="text-center"
                >Register a new membership</a
              >
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
    </div>
    <footer class="main-footer" style="margin-left:250px;margin-right:5px">
      <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
      <strong
        >Copyright &copy; 2014-2021
        <a href="">Mellow</a>.</strong
      >
      All rights reserved.
    </footer>


<style>
  .error {
    color:red;
    font-size:0.9rem;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    
    <script>
      $(document).ready(function () {
        $.validator.addMethod("passwordrule",function(value,element,args){
          return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/.test(value);
        }, "password must be strong")
          
          $("#form").validate({
              rules: {
                  inputUsername: {
                      required: true,
                  },
                  inputPassword: {
                      required: true,
                  }
              },
              messages: {
                  inputUsername: {
                      required: "Please enter your username.",
                  },
                  inputPassword: {
                      required: "Please provide a password.",
                  }
              },
              errorPlacement: function (error, element) {
                    
                    error.insertAfter(element);
                }, 
          });
      });
  </script>
  </body>
</html>