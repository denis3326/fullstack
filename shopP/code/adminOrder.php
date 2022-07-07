<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');


$sqlBuy = "SELECT * FROM buy";
$BuyResult = mysqli_query($conn, $sqlBuy);



?>