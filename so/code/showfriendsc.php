<?php

$link = mysqli_connect('localhost', 'root', '', 'top');

$userid = $_GET['friends'];

$friends = mysqli_query($link, "SELECT * FROM friends WHERE userid='$userid'");



?>
