
<?php 
session_start();
require 'Database.php';
require 'sendingemail.php';
$db=new database();
$conn=$db->getConn();

$id=$_SESSION['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $verify_status=0;
    $username=$_POST['username'];
    $_SESSION['username']=$username;
    $email=$_POST['email'];
    $verify_token=md5(rand());
    $sql="UPDATE registration SET username='$username',email='$email',verify_status='$verify_status',verify_token='$verify_token' WHERE id='$id'";
    if($conn->query($sql)){
        $_SESSION['status']='Info updated successfully,please verify your new email address ';
        $subject='Email verification from Mellow';
        $email_tem="<h2>hii $username<h2>
                <h2>You have updated your mail id.</h2>
                <h4>To Verify your email click below link<h5>
                <a href='http://localhost/project3/php/update-verify.php?token=$verify_token'>Click Me</a>";
        mail::sendemail("$subject","$email","$email_tem");
        header('Location:http://localhost/project3/html/user-dashboard.php');
    }
}

?>
