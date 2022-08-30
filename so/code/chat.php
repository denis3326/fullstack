<?php
    $data = [];

    $link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

    $msg = mysqli_query($link, "SELECT * FROM chat");

?>