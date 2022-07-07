<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$userId = $_SESSION['user_id'];
foreach($userId as $uid){}


$sqlCart = "SELECT * FROM cart WHERE user_id = '$uid'";
$cartResult = mysqli_query($conn, $sqlCart);



?>