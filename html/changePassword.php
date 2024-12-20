<?php session_start();
$_SESSION['status']='Provide new password'?>
   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Password Page</title>

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="../css/vendor.css" />

    <!--Link Swiper's CSS ================================================== -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../css/adminlte.min.css"/>

    <!--Link AOS's CSS ================================================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Style Sheet ================================================== -->
    
    <link rel="stylesheet" href="../css/adminlte.css" />
  </head>
  <body class="hold-transition">
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:670px">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <img src="../images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mellow</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        
    </aside>
    <div class="register-page">
      <div class="register-box" style="margin-left:200px">
        <div class="card">
          <div class="card-body register-card-body">
            <div class="register-logo">
              <a><b>Mellow</b></a>
            </div>
            <p class="login-box-msg">Password changing page</p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <form
                action="http://localhost/project3/php/changePassword.php"
                method="POST"
              class="information-form"
              id="form"
             style="width: 400px">
             
             <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>"><!--Here htmlspecialchars is used to not miss any specialcharacters present in it.  -->
             <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  id="password"
                  placeholder="Enter Password"
                  required
                  style="width:400px"
                />
              </div>
              
              <div class="form-group">
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                  name="confirmPassword"
                  placeholder="Confirm password"
                  required
                  style="width:400px"
                />
              </div>
              
              <div class="row">
              <div class="col-8">
              </div>
                <!-- /.col -->
                <div class="col-4">
                  <input
                    type="submit"
                    class="btn btn-primary btn-block"
                    id="sbmit"
                    style="width: 80px"
                    value="Change"
                  />
                </div>
                </div>
                <!-- /.col -->
              </div>
            </form>

          </div>
          <!-- /.form-box -->
        </div>
        <!-- /.card -->
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
        color: red;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    <script>
      $(document).ready(function () {
        $.validator.addMethod("passwordrule", function(value, element, args) {
        // Regex to check for at least one lowercase letter, one uppercase letter, one digit, and one special character
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/.test(value);
    }, "Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.");
        $("#form").validate({
          rules: {
            password: {
              required: true,
              passwordrule:true,
            },
            confirmPassword: {
              required: true,
              equalTo:"#password",

            },
          },
          messages: {
            password: {
              required: "Please provide a password.",
            },
            confirmPassword: {
              required: "Please provide confirm password.",
              equalTo:"Passwords are not the same"
            },
          },
        });
      });
    </script>
   </body>
</html>
