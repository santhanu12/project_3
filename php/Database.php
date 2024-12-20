<?php

class database{

    public function getConn(){

        $db_host="127.0.0.1";
        $db_user="root";
        $db_pass="";
        $db_name="santhanu_example";

        $dsn='mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8';

        $db=new PDO($dsn,$db_user,$db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
?>