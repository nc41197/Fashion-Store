<?php
require 'includes/common.php';
?>
﻿<html>
<head>
<title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.jumbotron{margin-top:80px;}
.row{float:right;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
include 'includes/check-if-added.php';
?>
<div class="container">
<div class="jumbotron">
<h1>Welcome to our Lifestyle Store!</h1>
<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
</div>
</div>
<div class="container">
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="camera.jpg">
<div class="caption">
<h2>Cannon EOS</h2>
<p>Price Rs.36000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(1)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="camera.jpg">
<div class="caption">
<h2>Nikon DSLR</h2>
<p>Price Rs.40000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(2)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="camera.jpg">
<div class="caption">
<h2>Sony DSLR</h2>
<p>Price Rs.50000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(3)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="camera.jpg">
<div class="caption">
<h2>Olympus DSLR</h2>
<p>Price Rs.80000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(4)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
</div>
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="watch.jpg">
<div class="caption">
<h2>Titan Model #301</h2>
<p>Price Rs.13000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(5)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="watch.jpg">
<div class="caption">
<h2>Titan Model #201</h2>
<p>Price Rs.30000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(6)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="watch.jpg">
<div class="caption">
<h2>HMT Milan</h2>
<p>Price Rs.80000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(7)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="watch.jpg">
<div class="caption">
<h2>Faber Luba #111</h2>
<p>Price Rs.18000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(8)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
</div>
<div class="row text-center">
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="shirt.jpg">
<div class="caption">
<h2>H&W</h2>
<p>Price Rs.800.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(9)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="shirt.jpg">
<div class="caption">
<h2>Luis Phil</h2>
<p>Price Rs.1000.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(10)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="shirt.jpg">
<div class="caption">
<h2>John Zok</h2>
<p>Price Rs.1500.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(11)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="thumbnail">
<img src="shirt.jpg">
<div class="caption">
<h2>Jhalsani</h2>
<p>Price Rs.1300.00</p>
<?php if(!isset($_SESSION['email'])){ ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
<?php }else{ 
   if(check_if_added_to_cart(12)){
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
   }else{ 
?>
      <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>   
<?php } 
} ?>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<center>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</center>
</div>
</footer>
</body>
</html>