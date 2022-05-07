<?php 

include_once('../../functions/admin_user_func.php');

$result = userReg($_POST['id'],$_POST['user'],$_POST['email'],$_POST['password'],$_POST['cpassword']); 

echo ($result);

if(isset($msg)){
    foreach($msg as $msg){
        echo $msg;
    }
}

?>