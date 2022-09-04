<?php
    $data = [];

    $link = mysqli_connect('localhost', 'root', '', 'top');

    $msg = mysqli_query($link, "SELECT * FROM chat");

?>
