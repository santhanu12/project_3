<?php 
session_start();
require 'Database.php';
$db=new database();
$conn=$db->getConn();
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $verify_query="SELECT verify_token,verify_status FROM registration WHERE verify_token='$token' LIMIT 1";
    $verify_query_run=$conn->query($verify_query);

    if(($verify_query_run->rowCount())>0){
            $row=$verify_query_run->fetch(PDO::FETCH_ASSOC);
            if($row['verify_status']==0){
                    $sql="UPDATE registration SET verify_status='1' WHERE verify_token='$token' LIMIT 1";
                    if($conn->query($sql)){
                       echo $_SESSION['status']="Email verification is successfull";
                        header("Location:http://localhost/project3/html/user-dashboard.php");
                    }else{
                       echo $_SESSION['status']="email verification unsuccessfull";
                        header("Location:http://localhost/project3/html/user-dashboard.php");
                    }
            }else{
                $_SESSION['status']="Email is already verified";
                header("Location:http://localhost/project3/html/user-dashboard.php");
            }
    }
else{
    $_SESSION['status']="This token doesnot Exists";
}
}else{
    $_SESSION['status']="Not Allowed";
    header("Location:http://localhost/project3/html/user-dashboard.php");
}
?>