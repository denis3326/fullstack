<?php

if(isset($_GET['pages'])){
    require './multiPage.php';
}

if(isset($_GET['cart'])){
    require './cart.php';
}

if(isset($_GET['item'])){
    require './viewItm.php';
}

if(isset($_GET['buy'])){
    require './buy.php';
}

if(isset($_GET['userInfo'])){
    require './userInfo.php';
}


?>