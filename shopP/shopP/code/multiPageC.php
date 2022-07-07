<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');


$link = $_GET['pages'];

$sqlItm = "SELECT * FROM items WHERE category_id = '$link'";
$itmResult = mysqli_query($conn, $sqlItm);



?>