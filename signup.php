<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?>
﻿<html>
<head>
<title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
footer{margin-top:160px;}
h1{padding-top:50px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container">
<div class="row">
<div class="col-xs-offset-4 col-xs-4">
<h1>SIGN UP</h1>
<form method="post" action="signup_script.php">
<div class="form-group">
    <input type="text" name="name" placeholder="Name" class="form-control" required="true" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
</div>
<div class="form-group">
    <input type="email" name="email" placeholder="Email" class="form-control" required="true" pattern="a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z](2,3)$">
</div>
<div class="form-group">
    <input type="password" name="password" placeholder="Password" class="form-control" required="true" pattern=".{6,}">
</div>
<div class="form-group">
<input type="text" name="contact" placeholder="Contact" class="form-control" required="true">
</div>
<div class="form-group">
<input type="text" name="city" placeholder="City" class="form-control" required="true">
</div>
<div class="form-group">
<input type="text" name="address" placeholder="Address" class="form-control" required="true">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>

</body>
</html>