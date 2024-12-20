<?php  session_start();
 if(!isset($_SESSION['is_logged_in'])){
 $_SESSION['is_logged_in']=false;  }

 if(!isset($_SEESION['is_logged_in']) && $_SESSION['is_logged_in']==false){
 $_SESSION['status']='Please login and access the other pages';
 header("Location:http://localhost/project3/html/login.php");}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Page</title>

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
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:650px">
            <!-- Brand Logo -->
            <a href="http://localhost/project3/html/home1.php" class="brand-link">
              <img src="../images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Mellow</span>
            </a>
        
            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                
                <a href="http://localhost/project3/html/user-dashboard.php" class="d-block">
                <div class="image">
                <img src="../images/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <span class="brand-text font-weight-light"><strong><?php echo $_SESSION['username'];?></strong></span></a>
                
              </div>
        
              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->                    
                      <li class="nav-item">
                        <a href="home1.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Home</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>AboutUs</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="contacts.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Contacts</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/project3/php/logout.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                        </a>
                      </li>
                    </ul>
                    </nav>
                </aside>
    <div class="register-page">
      <div class="register-box" style="margin-left:200px">
        <div class="card">
          <div class="card-body register-card-body">
            <div class="register-logo">
              <a><b>Mellow</b></a>
            </div>
            <p class="login-box-msg">User Information Updation Page</p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <form
                action="http://localhost/project3/php/edit.php"
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
                  value="<?php echo $_SESSION['username']?>"
                  required
                  style="width:400px"
                />
              </div>
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="email"
                  value="<?php echo $_SESSION['email']?>"
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- jQuery Validation Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#form").validate({
          rules: {
            username: {
              required: true,
            },
            email: {
              required: true,

            },
          },
          messages: {
            username: {
              required: "Please provide a username.",
            },
            email: {
              required: "Please provide an email.",
            },
          },
        });
      });
    </script>
     <!--<script>
    // JavaScript for handling form submission
    document.getElementById('form').addEventListener('submit', function (event) {
      event.preventDefault();

      // Mock email sending logic (replace with real logic)
      const email = document.getElementById('email').value;
      if (email) {
        // Simulate successful email sending
        Swal.fire({
          title: 'Details Updated',
          text: 'Details Updated successfully',
          icon: 'success',
          confirmButtonText: 'OK'
          
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '../php/edit.php';
          }
        });
      } else {
        Swal.fire({
          title: 'Error',
          text: 'Details is not updated',
          icon: 'error',
          confirmButtonText: 'Try Again'
        });
      }
    });
  </script>-->
</body>
</html>
   </body>
</html>

