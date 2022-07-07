<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$item_id = $_GET['itemChange'];


$sqlGetItm = "SELECT * FROM items WHERE itm_id = '$item_id'";
$getItmResult = mysqli_query($conn, $sqlGetItm);
$rowImg = mysqli_fetch_assoc($getItmResult);

if(isset($_POST['change'])){

    $title = $_POST['title'];
    $text = $_POST['text'];
    $price = $_POST['price'];

    if(empty($text) && empty($price)){
        $sqlTitle = "UPDATE items SET itm_title = '$title' WHERE itm_id = '$item_id'";
        mysqli_query($conn, $sqlTitle);   
        echo "<script>alert('title chenged');</script>"; 
    }

    if(empty($title) && empty($price)){
        $sqlText = "UPDATE items SET itm_text = '$text' WHERE itm_id = '$item_id'";
        mysqli_query($conn, $sqlText);  
        echo "<script>alert('text chenged');</script>";  
    }

    if(empty($text) && empty($title)){
        $sqlPrice = "UPDATE items SET itm_price = '$price' WHERE itm_id = '$item_id'";
        mysqli_query($conn, $sqlPrice);   
        echo "<script>alert('price chenced');</script>"; 
    }

}

if(isset($_POST['Delete'])){

    $sqlDelItm = "DELETE FROM items WHERE itm_id='$item_id';";
    mysqli_query($conn, $sqlDelItm);
    echo "<script>alert('item deleted');</script>"; 

}

?>