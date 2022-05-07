<?php 

use FTP\Connection;
session_start();

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


function login($username, $pwd){
    $con = Connection();
    $new_pwd = md5($pwd);

    $login_sql = "SELECT * FROM user_tbl WHERE username = '$username' && pass1 = '$new_pwd'";
    $login_result = mysqli_query($con, $login_sql);
    $login_nor = mysqli_num_rows($login_result);
    

    if($login_nor > 0){
        
        $login_row = mysqli_fetch_assoc($login_result);
        if($login_row['user_status'] == 1){
            if($login_row['user_roll'] == 'admin'){

                setcookie('login',$login_row['login_id'],time()+60*60,'/');
                $_SESSION['loginSession'] = $login_row['login_id'];
                header('location:lib/views/admin.php');

            }
            elseif($login_row['user_roll'] == 'user'){

                setcookie('login',$login_row['login_id'],time()+60*60,'/');
                $_SESSION['loginSession'] = $login_row['login_id'];
                header('location:lib/views/user.php');

                }
    
            }else{
                return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Account is Deactivated..!</div>&nbsp</center>";
            }
        }       

    else{
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>No Records Found..!</div>&nbsp</center>";
    }

}

?>
