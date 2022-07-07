<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');


$userId = $_SESSION['user_id'];
foreach($userId as $uid){}

$itm_id = $_GET['userInfo'];

$sqlCart = "SELECT * FROM cart WHERE user_id = '$uid' AND itm_id = '$itm_id'";
$cartResult = mysqli_query($conn, $sqlCart);
$row = mysqli_fetch_assoc($cartResult);

if(isset($_POST['buy'])){


    $userName = $_SESSION['user_name'];
    foreach($userName as $uname){}


    $sqlCartToBuy = "SELECT * FROM cart WHERE user_id = '$uid' AND itm_id = '$itm_id'";
    $cartResultToBuy = mysqli_query($conn, $sqlCartToBuy);
    $rowToBuy = mysqli_fetch_assoc($cartResultToBuy);

    $count = $_POST['count'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $address_num = $_POST['address_num'];
    $msg = $_POST['msg'];

    $sqlBuy = "INSERT INTO buy (user_name, up_time, itm_title, itm_text, count, country, phone, address, home_num, msg) VALUES ('$uname', '".$rowToBuy['add_time']."', '".$rowToBuy['itm_title']."', '".$rowToBuy['itm_text']."', '$count', '$country', '$phone', '$address', '$address_num', '$msg')";
    mysqli_query($conn, $sqlBuy);

    echo "<script>alert('you buy this item');</script>";

    header('location: ./cart.php?');

}


?>