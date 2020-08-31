<?php
require 'includes/common.php';
?>﻿
<html>
<head>
<title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.panel{padding-top:50px;
       margin-bottom:301px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="panel panel-primary">
<div class="panel-heading">
</div>
<div class="panel-body">
<div class="container">
<div class="row">
<div class="col-xs-offset-4 col-xs-4">
<p class="text-warning"><b>Login to make a purchase</b></p>
<form method="post" action="login_submit.php">
<div class="form-group">
<input type="email" name="email" placeholder="Email" class="form-control" required="true">
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Password" class="form-control" required="true">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="panel-footer">
<center>Don't have an account? Register</center>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>