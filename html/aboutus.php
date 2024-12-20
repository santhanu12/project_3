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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AboutUs</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Us</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

        <!-- Default box -->
        
        <div class="card card-solid"style="margin-left:6px; margin-right:6px" >
          <div class="card-body" style="margin-bottom:0px">
            <section class="content"style="margin-bottom:0px">
                <h2>Who We Are</h2>
                <p>
                  At ShopEasy, we are committed to providing you with a seamless shopping
                  experience. Founded in 2020, our mission has been to make online
                  shopping accessible, enjoyable, and stress-free for everyone.
                </p>
                <p>
                  Our platform offers a wide variety of products, from electronics to
                  fashion, and everything in between. We partner with trusted brands and
                  sellers to ensure that every purchase you make is of the highest
                  quality.
                </p>
          
                <h2>Our Mission</h2>
                <p>
                  We aim to revolutionize e-commerce by combining innovative technology,
                  exceptional customer service, and a user-friendly interface. Our goal is
                  to create a shopping destination where you can find everything you need
                  in just a few clicks.
                </p>
                
              </section>
            </div></div>
  
      <footer class="main-footer" style="margin-left:10px;margin-right:5px;margin-top:200px">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="">Mellow</a>.</strong
        >
        All rights reserved.
      </footer>
</body>
</html>