<?php

$link = mysqli_connect('localhost', 'root', '', 'top');
error_reporting(E_ERROR | E_PARSE);

$userid = $_SESSION['user_id'];
foreach($userid as $uid){}

if(isset($_POST['find'])){

    $username = $_POST['usern'];

    $users = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");



}



?>
