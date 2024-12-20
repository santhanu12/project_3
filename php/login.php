<?php 

session_start();
require 'Database.php';
require 'authenticate.php';

$db=new database();
$conn= $db->getConn();

try{
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo $_SESSION['status'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['username']=$username;
    
    if(auth::authenticate($conn,$_POST['username'],$_POST['password'])){
        $_SESSION['status']='You are logged in';
        $_SESSION['is_logged_in']=true;
        header('location:http://localhost/project3/html/home1.php');
    }else{
        echo $_SESSION['status']='password and email is not matching or email is not verified';
        header('location:http://localhost/project3/html/login.php');
    }
}}catch(Exception $e){
    echo $e;
}


?>