<?php
//require '../html/user-dashboard.php';
class auth{
    public $id;
    public $username;
    public $email;
    public $passwords;
    public $verify_token;
    public $verify_status;

    public static function authenticate($conn,$username,$password){
            $sql='SELECT * FROM registration WHERE username= :username';
            $stmt=$conn->prepare($sql);
            $stmt->bindvalue(':username',$username,PDO::PARAM_STR);
            $stmt-> setFetchMode(PDO::FETCH_CLASS,'auth');
            $stmt->execute();
           // $uses=new user();
            //$uses->userdashboard("$username");
            $user=$stmt->fetch();
            
                

            if(password_verify($password,$user->passwords )&& $user->verify_status==1){
               
                     return true;}
            
    }
}


?>