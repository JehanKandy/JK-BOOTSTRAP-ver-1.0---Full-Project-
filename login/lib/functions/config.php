<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "bootstrap";

        $con = mysqli_connect($server,$user,$pass,$db);

        $result = (!$con)?null:$con;

        return $result;
    }
?>