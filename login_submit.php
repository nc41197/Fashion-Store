<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$pass= $_POST['password'];
$password= md5($pass);
$select_query="SELECT id,email FROM users WHERE email='$email'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows= mysqli_num_rows($select_query_result);
if($total_rows==0){
    echo "No such user found.";
}else{
    $row= mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']= mysqli_insert_id($con);
    header('location:products.php');
}
?>

