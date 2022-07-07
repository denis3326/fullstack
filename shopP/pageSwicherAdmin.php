<?php

if(isset($_GET['nav'])){
    require './adminPages/navControl.php';
}

if(isset($_GET['items'])){
    require './adminPages/items.php';
}

if(isset($_GET['itemChange'])){
    require './adminPages/itemChange.php';
}

if(isset($_GET['addItm'])){
    require './adminPages/addItem.php';
}

if(isset($_GET['orders'])){
    require './adminPages/orders.php';
}

?>