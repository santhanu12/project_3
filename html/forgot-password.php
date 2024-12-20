<?php session_start();
    $_SESSION['status']='Please Provide registered email'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forgot Password</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.css" />
    <link rel="stylesheet" href="../css/homecss.css" />
    <link rel="stylesheet" href="../css/adminlte.min.css"/>
  </head>
  <body class="hold-transition">
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:650px">
      <!-- Brand Logo -->
      <a href="http://localhost/project3/html/login.php" class="brand-link">
        <img src="../images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Mellow</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
      
          </aside>
    <div class="login-page" >
      <div class="login-box" style="margin-left:250px">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <div class="login-logo">
              <a href="../../index2.html"><b>Mellow</b></a>
            </div>
            <p class="login-box-msg">
              You forgot your password? Here you can easily retrieve a new
              password.
            </p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <form action="http://localhost/project3/php/pswdchangeemail.php" method="post" id="form"method="post" style="width: 400px">
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Email"
                  minlength="10"
                  maxlength="45"
                  required
                />
                
              </div>
              <div class="row">
                <div class="col-12">
                 <!--<button type="submit" class="btn btn-primary btn-block">
                    Request new password
                  </button>-->
                  <input type="submit" class="btn btn-primary btn-block " id="sbmit" value="Request new password">
                </div>
                <!-- /.col -->
              </div>
            </form>

            <p class="mt-3 mb-1">
              <a href="login.php">Login</a>
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
              // Initialize form validation
              
              $("#form").validate({
                  rules: {
                      email: {
                          required: true,
                          email: true // Built-in rule for email format
                      },
                  },
                  messages: {
                      email: {
                          required: "Please enter your email address.",
                          email: "Please enter a valid email address."
                      },
                  },
                  
              });
          });
      </script>
  </body>
</html>
