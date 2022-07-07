<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$userId = $_SESSION['user_id'];
foreach($userId as $uid){}

$itm_id = $_GET['buy'];

$sqlCart = "SELECT * FROM cart WHERE user_id = '$uid' AND itm_id = '$itm_id'";
$cartResult = mysqli_query($conn, $sqlCart);
$row = mysqli_fetch_assoc($cartResult);





?>