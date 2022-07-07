<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');


$link = $_GET['item'];

$sqlView = "SELECT * FROM items WHERE itm_id = '$link'";
$viewResult = mysqli_query($conn, $sqlView);
$row = mysqli_fetch_assoc($viewResult);



$sqlItm = "SELECT * FROM items";
$itmResult = mysqli_query($conn, $sqlItm);




?>