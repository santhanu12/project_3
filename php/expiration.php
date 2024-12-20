<?php 
session_start();
require 'Database.php';
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $db=new database();
    $conn=$db->getConn();
    $sql="SELECT token,expires_at FROM password_reset WHERE token='$token'";
    $verify_query_run=$conn->query($sql);
    $row=$verify_query_run->fetch(PDO::FETCH_ASSOC);
    date_default_timezone_set("Asia/Kolkata");                           
    $myDate=$row['expires_at'];
    $expire_date = date('Y-m-d H:i',strtotime('+10 minutes',strtotime($myDate)));
    $now = date("Y-m-d H:i");
   
    if($now<$expire_date){
        header("Location:http://localhost/project3/html/changePassword.php?token=$token");

    }else{
        echo "link is expired";
    }
}
?>