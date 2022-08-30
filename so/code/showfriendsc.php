<?php

$link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

$userid = $_GET['friends'];

$friends = mysqli_query($link, "SELECT * FROM friends WHERE userid='$userid'");



?>