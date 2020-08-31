<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<html>
<head>
<title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
footer{margin-top:402px;}
p{margin-top:100px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container">
<p class="text-success"><b><center>Your order is confirmed. Thank you for shopping with us. 
<a href="products.php">Click here</a> to purchase any other item.</center></b></p>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>