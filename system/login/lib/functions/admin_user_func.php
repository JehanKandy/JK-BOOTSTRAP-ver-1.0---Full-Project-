<?php 

use FTP\Connection;

include_once("config.php");


function userReg($usern,$email,$pass1,$cpass){
    $con = Connection();
    

    $check_sql = "SELECT * FROM user_tbl WHERE email = '$email' && username = '$usern'";
    $check_result = mysqli_query($con, $check_sql);
    $check_nor = mysqli_num_rows($check_result);

    $pass_enc = md5($pass1);
    $cpass_enc = md5($cpass);
    
    if($check_nor > 0){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists</div>&nbsp</center>";
    }
    elseif($pass_enc != $cpass_enc){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password and Confirm Password doesn't match..!</div>&nbsp</center>";
    }
    else{
        $sql_insert = "INSERT INTO user_tbl(username,email,pass1,user_roll,user_status)VALUES('$usern','$email','$pass_enc','user','1')";
        $result = mysqli_query($con, $sql_insert);
        header("location:../login/login.php");
    }
}



?>