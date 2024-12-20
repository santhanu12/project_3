<?php 
session_start();
require 'sendingemail.php';

try{
    if($_SERVER['REQUEST_METHOD']=='POST'){
        require 'Database.php';
        $db=new database();
        $conn=$db->getConn();        
        $username=$_POST['username'];
        $email=$_POST['email'];
        $verify_query="SELECT email FROM registration WHERE email='$email' LIMIT 1";
        $verify_query_run=$conn->query($verify_query);
        if(!($verify_query_run->rowCount())>0){
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8,15}$/', $_POST['password'])) {
        $passwords=password_hash(($_POST['password']),PASSWORD_DEFAULT);
        $userrole=$_POST['role'];
        $verify_token=md5(rand());
        $confirmpassword=$_POST['confirmPassword'];
        $sql="INSERT INTO registration(username,email,passwords,userrole,verify_token)VALUES('$username','$email','$passwords','$userrole','$verify_token')";
        if($conn->query($sql)){
            $subject="Email verification from Mellow";
            $email_tem="<h2>Hii $username,<h2>
                <h2>You have registered to Mellow</h2>
                <h4>Verify your email by clicking below link<h5>
                <a href='http://localhost/project3/php/verify.php?token=$verify_token'>Click Me</a>";
            mail::sendemail("$subject","$email","$email_tem");
           
            echo $_SESSION['status']='Successfully registered, Please verify your email id with the provided link,and then login.';
            header('location:http://localhost/project3/html/login.php');
            $conn=null;
        }
    }
    else{
        echo $_SESSION['status']="Password is not strong";
        }
    }else{
       echo  $_SESSION['status']="Email is already registered,please enter another email.";
        header('location:http://localhost/project3/html/register.php');
    }
    }else{
        echo $_SESSION['status']='User Data is not received ';
        header('location:http://localhost/project3/html/login.php');
        }
    }catch(Exception $e){
    echo $e;
    }
?>

  

