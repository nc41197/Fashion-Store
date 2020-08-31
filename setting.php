<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
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
footer{margin-top:283px;}
h2{margin-top:100px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container">
<div class="row">
    <div class="col-xs-offset-4 col-xs-4"><br><br>
<h2>Change Password</h2>
<form method="post" action="settings_script.php">
<div class="form-group">
<input type="password" name="old" placeholder="Old Password" class="form-control" required="true">
</div>
<div class="form-group">
<input type="password" name="new" placeholder="New Password" class="form-control" required="true">
</div>
<div class="form-group">
<input type="password" name="pass" placeholder="Re-type New Password" class="form-control" required="true">
</div>
<div class="form-group">
    <input type="button" name="change" class="btn btn-primary"value="Change">
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