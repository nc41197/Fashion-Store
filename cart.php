<?php
require 'includes/common.php';

?>
<html>
<head>
<title>Lifestyle Store</title>
<link rel="stylesheet" type="text/css" href="..\bootstrap-3.3.7-dist\css\bootstrap.min.css">
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="..\bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
footer{margin-top:415px;}
.table{margin-top:50px;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
include 'includes/header.php';
$sum=0;
$user_id=$_SESSION['user_id'];
$join_query="SELECT ui.item_id,i.name,i.price FROM users_items ui
             INNER JOIN items i ON ui.item_id=i.id
             WHERE ui.user_id='$user_id'";
$join_query_result= mysqli_query($con, $join_query)or die(mysqli_error($con));
$items_in_cart= mysqli_num_rows($join_query_result);
if($items_in_cart==0){
    echo "Add items to the cart first!";
}  else{
    while ($row = mysql_fetch_row($join_query_result)) {
        $price=$row['price'];
        $sum=$sum+$price;
    }
}
?>
<div class="container table-responsive">
<table class="table">
<tbody>
<tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
<tr><td></td>><td></td>><td></td>><td></td></tr>
<tr><td></td>><td></td>><td></td>>
<td><a href="success.html" class="btn btn-primary">Confirm Order</a></td></tr>
</tbody>
</table>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>