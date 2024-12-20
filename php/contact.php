<?php 
session_start();
require 'sendingemail.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "hii";
    $username=$_SESSION['username'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $email_etm="<h3> Hii I am $username,</h3>
                <p>$message,this is the reason please contact me through this email id $email</p>";
    mail::sendemail("$subject","santhanuchakrapani@gmail.com","$email_etm");
    header("Location:http://localhost/project3/html/contacts.php");
}
?>