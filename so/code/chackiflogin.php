<?php

if(empty($_SESSION['username'])){
    header('location: ./pages/login.php');
}


?>