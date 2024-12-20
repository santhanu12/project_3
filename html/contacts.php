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
  <title>Mellow | Contacts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <style>
    .mapandform{
        display:flex;
        justify-content: center;
    }
  </style>
</head>

<body class="hold-transition">
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height:920px">
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
            <h1>Contacts</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
    <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
  
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div>
                      <h2 class="lead"><b>Nicole Pearson</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> EmailId: nicolepears@gmail.com</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Linkedin: Nicole Pearson</li>
                      </ul>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    Digital Strategist
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div>
                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> EmailId: nicolepears@gmail.com</li>
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Linkedin: Nicole Pearson</li>
                        </ul>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
  
                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Media Coordinator
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div>
                      <h2 class="lead"><b>Wade Wilson</b></h2>
                      <p class="text-muted text-sm"><b>About: </b> Content Creation/Media Planning/Collaboration </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Wheaton Street 219, Florida City 03214</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 400 - 11 16 29 46</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> EmailId: wadewilson@gmail.com</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Linkedin: Wade Wilson</li>
                      </ul>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="mapandform" >
                <iframe class="maps" style="width:500px;height:470px;border-radius:5px;margin-left:5px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1055.6783638918826!2d77.6384443831731!3d12.976559206864218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6ad90d669ad1%3A0x5e1e8a94cb54714f!2sFaveo%20Helpdesk!5e0!3m2!1sen!2sin!4v1732787822499!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  
                  <div class="register-box" style="margin-left:50px;max-height:450px">
                  <div class="card">
                  <div class="card-body register-card-body">
                  <p class="login-box-msg">Contact Information</p>
                  
                <form id="form" action="http://localhost/project3/php/contact.php" method="post" style="width:300px;height:auto" >
                
                  <div class="form-group">

                    <input type="email" id="email" name="email"class="form-control" placeholder="Enter email" required />
                  </div>
                  <div class="form-group">

                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject" required />
                  </div>
                  <div class="form-group">
                    <textarea id="inputMessage" class="form-control" name="message" rows="4" placeholder="Enter message " required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
                </form>
                </div>
                </div>
                </div>
              </section>
          </sectin> 
            
      <footer class="main-footer" style="margin-left:10px;margin-right:5px">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="">Mellow</a>.</strong
        >
        All rights reserved.
      </footer>
</body>
<style>
  .error {
    color:red;
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
                      email: true, // Built-in rule for email format
                  },
                  subject: {
                      required: true,
                      minlength: 6 // Password must be at least 6 characters long
                  },
                  message:{
                    required:true,
                  },
              },
              messages: {
                  email: {
                      required: "Please enter your email address.",
                      email: "Please enter a valid email address."
                  },
                  subject: {
                      required: "Please enter subject.",
                  },
                  message:{
                    required:"Please enter message.",
                  },
              },
          });
      });
  </script>
</html>