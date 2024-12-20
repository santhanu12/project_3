<?php 
session_start();
require 'Database.php';
if(!isset($_SESSION['permission'])){
    $_SESSION['permission']=false;
    }  
     if($_SESSION['permission']==false){
     $_SESSION['status']='You are not allowed to delete the user.';
     header("Location:http://localhost/project3/html/user-dashboard.php");
     }else{
    $db=new database();
    $conn=$db->getConn();

    $username=$_GET['username'];

    $sql="DELETE from registration WHERE username='$username'";
    if($conn->query($sql)){
        $_SESSION['status']='User data deleted successfully';
        $_SESSION['is_logged_in']=false;
        header("Location:http://localhost/project3/php/logout.php");
    }
    $conn=null;
}
?>