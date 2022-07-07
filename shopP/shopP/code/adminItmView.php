<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$sqlItm = "SELECT * FROM items";
$itmResult = mysqli_query($conn, $sqlItm);



?>