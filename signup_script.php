<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=$_POST['password'];
$regex_email="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z](2,3)$";
if(!preg_match($regex_email, $email)){
    echo "Incorrect email";
}
if(strlen($password)<6){
    echo "Password should have atleast 6 characters.";
}
$duplicate_query="SELECT id FROM users WHERE email='$email'";
$duplicate_query_result= mysqli_query($con, $duplicate_query) or die(mysqli_error($con));
$selected_rows= mysqli_num_rows($duplicate_query_result);
if($selected_rows>0){
    echo "This email-id already exists.";
}else{
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $contact= mysqli_real_escape_string($con,$_POST['contact']);
    $city= mysqli_real_escape_string($con,$_POST['city']);
    $address= mysqli_real_escape_string($con,$_POST['address']);
    $insert_query="INSERT INTO users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
    $insert_query_result= mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['contact']=$contact;
    $_SESSION['city']=$city;
    $_SESSION['address']=$address;
    header('location:products.php');
}
?>

