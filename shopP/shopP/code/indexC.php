<?php


session_start();
$user_name = $_SESSION['user_name'];
foreach($user_name as $name){}

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$sqlNav = "SELECT * FROM nav";
$navResult = mysqli_query($conn, $sqlNav);


?>