<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
if(isset($_POST['change'])){
    $email=$_SESSION['email'];
    $old=$_POST['old'];
    $new=$_POST['new'];
    $renew=$_POST['pass'];
    $chg_pwd="select * from users where email='$email'";
    $chg_pwd_result= mysqli_query($con, $chg_pwd) or die(mysqli_error($con));
    $chg_pwd1= mysqli_fetch_array($chg_pwd_result);
    $fetched_pass=$chg_pwd1['password'];
    if($fetched_pass==$old){
        if($new==$renew){
            $update_pass="update users set password='$new' where email='$email'";
            $update_pass_result= mysqli_query($con, $update_pass);
        }
    }
}
?>

