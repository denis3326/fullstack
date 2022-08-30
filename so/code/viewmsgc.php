<?php

$link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

$userid = $_GET['viewmsg'];

$mymsg = mysqli_query($link, "SELECT * FROM messages WHERE senduserid='$userid'");


?>