<?php

$conn = mysqli_connect('localhost', 'root', '', 'shopp');

$sqlNav = "SELECT * FROM nav";
$navResult = mysqli_query($conn, $sqlNav);

if(isset($_POST['add'])){

    $nav_name = $_POST['navName'];

    $sqlAddNav = "INSERT INTO nav (nav_id, nav_title) VALUES ('', '$nav_name')";
    mysqli_query($conn, $sqlAddNav);
    echo "<script>alert('nav added');</script>";
    
}


if(isset($_POST['del'])){

    $nav_nameDel = $_POST['navNameDel'];

    $sqlDelNav = "DELETE FROM nav WHERE nav_title='$nav_nameDel';";
    mysqli_query($conn, $sqlDelNav);
    echo "<script>alert('nav deleted');</script>";
}


if(isset($_POST['addItm'])){

    $title = $_POST['title'];
    $text = $_POST['text'];
    $price =  $_POST['price'];
    $category = $_POST['category'];
    $category_id = $_POST['categoryId'];

    $fileName = $_FILES['Uploadfile']['name'];
    $tempname = $_FILES['Uploadfile']['tmp_name'];
    $folder = "./assets/img/".$fileName;

    $sqlAddItm = "INSERT INTO items (itm_id, category_id, itm_category, itm_title, itm_text, itm_img, time, price) VALUES ('', '$category_id', '$category', '$title', '$text', '$fileName', '', '$price')";
    mysqli_query($conn, $sqlAddItm);
    if(move_uploaded_file($tempname, $folder)){
        echo "<script>alert('item added');</script>";
        header('location: ./indexAdmin.php?items');
    }


}

$sqlCatId = "SELECT DISTINCT nav_id, nav_title FROM nav";
$selectCatId = mysqli_query($conn, $sqlCatId);





?>