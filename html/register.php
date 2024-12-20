<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Page</title>

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
      <a href="http://localhost/project3/html/login.php" class="brand-link">
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
            <p class="login-box-msg">Register a new membership</p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <form
                action="http://localhost/project3/php/register.php"
                method="POST"
              class="information-form"
              id="form"
             style="width: 400px">
              <div class="form-group" >
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Full name"
                  required
                  style="width:400px"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter email"
                  required
                  style="width:400px"
                />
              </div>
              <div class="form-group">
              <label for="role">Choose your role:</label>
              <select id="role" name="role" required>
                <option value="manager">Manager</option>
                <option value="developer">Developer</option>
              </select>  
              </div>
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
                  <div class="icheck-primary">
                    <input
                      type="checkbox"
                      id="agreeTerms"
                      name="agreeTerms"
                      required
                    />
                    <label for="agreeTerms">
                      I agree to the terms
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <input
                    type="submit"
                    class="btn btn-primary btn-block"
                    id="sbmit"
                    style="width: 80px"
                    value="Register"
                  />
                   
                </div>
                <!-- /.col -->
              </div>
            </form>

            <a href="login.php" class="text-center"
              >I already have a membership</a
            >
          </div>
          <!-- /.form-box -->
        </div>
        <!-- /.card -->
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
            username: {
              required: true,
            },
            email: {
              required: true,
              email: true, // Built-in rule for email format
            },
            role:{
              required:true,
            },
            password: {
              required: true,
              passwordrule:true,
            },
            confirmPassword: {
              required: true,
              equalTo:"#password",

            },
            agreeTerms:{
              required:true,
            },
          },
          messages: {
            username:{
              required:"Please enter a name",
            },
            email: {
              required: "Please enter your email address.",
              email: "Please enter a valid email address",
            },
            role:{
              required:"Please select your role",
            },
            password: {
              required: "Please provide a password.",
            },
            confirmPassword: {
              required: "Please provide confirm password.",
              equalTo:"Passwords are not the same"
            },
            agreeTerms:{
              required:'Please click checkbox'
            }
          },
        });
      });
    </script>
    <!-- 
    <script>
      document
        .querySelector(".information-form")
        .addEventListener("submit", function (event) {
          //event.preventDefault(); // Prevent form submission
          event.preventDefault();
          const password = document.querySelector(".psd").value;
          const errorMsg = document.querySelector(".error");
          const button = document.querySelector(".sbmit");
          const rpassword = document.querySelector(".rpsd").value;
          const errorMsg2 = document.querySelector(".error2");

          // Define password format requirements (example: at least 8 characters, one uppercase, one number)
          const passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;

          if (!passwordRegex.test(password)) {
            errorMsg.textContent =
              "Password should be 8 characters long with one uppercase letter and number.";
          } else {
            errorMsg.textContent = "password is Valid";
            // Add a click event listener
            button.addEventListener("click", function () {
              //location.href = "login.html"; // Redirect to the new page

              if (password == rpassword) {
                location.href = "login.html";
              } else {
                errorMsg2.textContent =
                  "Retyped password does not match actual password";
              }
            });
          }
        });
    </script>-->
   
  </body>
</html>
