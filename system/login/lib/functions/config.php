<?php 
    function Connection(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "bootstrap";

        $conn = mysqli_connect($server,$user,$password,$database);

        $result = (!$conn)?null:$conn;

        return $result;
    }
?>