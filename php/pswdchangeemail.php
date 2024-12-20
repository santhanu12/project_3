<?php
session_start();
require 'sendingemail.php';
require 'Database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    date_default_timezone_set("Asia/Kolkata");
    $myDate = date('Y-m-d H:i');
    $email=$_POST['email'];
    $token=md5(rand());
    $db=new database();
    $conn=$db->getConn();
    $verify_query="SELECT email FROM registration WHERE email='$email' LIMIT 1";
    $verify_query_run=$conn->query($verify_query);
    if(($verify_query_run->rowCount())>0){
        $sql="INSERT  INTO password_reset  (email,token) VALUES ('$email', '$token')";
        $conn->query($sql);

        $email_tem="<a href='http://localhost/project3/php/expiration.php?token=$token'>Click Me</a>";
        $subject="This email sent from Mellow to change password $myDate";
        mail::sendemail("$subject","$email","$email_tem");
        echo 'Email has been sent to change password,please check the given email inbox';
    }else{
        $_SESSION['status']='The provided email id is not registered';
        header('Location:http://localhost/project3/html/forgot-password.php');
    }
    
}