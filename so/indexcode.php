<?php
    session_start();
    $username = $_SESSION["username"];
    //echo "Hi $username";

    foreach($username as $name){}

    $userid = $_SESSION["user_id"];
    //echo "Hi $username";

    foreach($userid as $id){}

    $link = mysqli_connect('localhost', 'root', '', 'top');

    $getavatar = mysqli_query($link, "SELECT * FROM users WHERE user_id='$id'");
    $row = mysqli_fetch_assoc($getavatar);
    

?>
