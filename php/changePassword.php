<?php
session_start();
            $_SESSION['status']='Please enter the new password.';
            try{
            require 'Database.php';
            $db=new database();
            $conn=$db->getConn();
            
            if($_SERVER["REQUEST_METHOD"]=="POST"){
              $token=$_POST['token'];
              echo $token;
              $sql="SELECT email from password_reset WHERE token='$token'";
              $verify_query=$conn->query($sql);
              $row=$verify_query->fetch(PDO::FETCH_ASSOC);
              $email=$row['email'];
            $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
            $sql="UPDATE registration SET passwords='$password' WHERE email='$email'";
            if($conn->exec($sql)){
                $_SESSION['status']='Password successfully updated';
                header('Location:http://localhost/project3/html/login.php');
            }
            }}catch(PDOexception $e){
            echo $e->getMessage();
            }      
            $conn=null;?>

