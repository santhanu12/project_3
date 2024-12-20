<?php 
session_start();
require '../php/Database.php';
$db=new database();
$conn=$db->getConn();
    if(isset($_SESSION['username'])){ 
        $username=$_SESSION['username'];
        $verify_status;
        $sql="SELECT id,email,username,userrole,verify_status FROM registration WHERE username='$username'";
        $results=$conn->query($sql);
        $article=$results->fetch(PDO::FETCH_ASSOC);
        $_SESSION['email']=$article['email'];
        $_SESSION['id']=$article['id'];
    }

        $username=$_SESSION['username'];
        $sql="SELECT userrole FROM registration WHERE username='$username'";
        $verify_run=$conn->query($sql);
        $data=$verify_run->fetch(PDO::FETCH_ASSOC);
        $userrole=$data['userrole'];
        if("$userrole"=="manager"){
            $_SESSION['permission']=true;
        }else{
          $_SESSION['permission']=false;
        }

$conn=null;
?>


<?php
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
  <title>userdashboard</title>

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
    <div class="login-page">
      <div class="login-box" style="margin-left:250px">
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <div class="login-logo">
              <a><b>Mellow</b></a>
            </div>
            <p class="login-box-msg">User Information</p>
            <p class="login-box-msg"><?php echo $_SESSION['status'];?></p>
            <?php if($article== null): ?>
            <p> no articles found</p>
            <?php else: ?>  
            <article>
            <h6>Username:<?= $article['username']; ?></h6>
            <h6>Email:<?= $article['email']; ?></h6>
            <h6>Userrole:<?= $article['userrole']; ?></h6>
            <h6>Email Verification:<?= $article['verify_status']?'Done':'Not Done';?><br><br>
            <?php if($_SESSION['permission']==true):?>
            <a href="http://localhost/project3/php/delete.php?username=<?=$article['username']?>"><button type='submit'>Delete User</button></a><br><br>
            <?php endif?>
            <a href="http://localhost/project3/html/edit.php"><button type='submit'>Edit User</button></a>
            </article>
            <?php endif ?>
            </div>
         </div>
       </div>
    </div>
    <footer class="main-footer" style="margin-left:250px;margin-right:5px;margin-top:0px">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="">Mellow</a>.</strong
        >
        All rights reserved.
      </footer>
</body>
</html>