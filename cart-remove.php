<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$delete_query="DELETE FROM users_items WHERE user_id='$user_id' AND item_id='$item_id'";
$delete_query_result= mysqli_query($con, $delete_query);
header('location:cart.php');
?>

