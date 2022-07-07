<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$itm_id = $_GET['item'];
$timeUp = date('Ymd');
$title = $row['itm_title'];
$text = $row['itm_text'];
$price = $row['price'];
$userId = $_SESSION['user_id'];
foreach($userId as $uid){}


$sqlCart = "INSERT INTO cart (itm_id, itm_title, itm_text, user_id, add_time, price) VALUES ('$itm_id', '$title', '$text', '$uid', '$timeUp', '$price')";

if(isset($_POST['add'])){
    mysqli_query($conn, $sqlCart);
    echo "<script>alert('this item in your cart');</script>";
}


?>