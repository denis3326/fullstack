<?php

error_reporting(E_ERROR | E_PARSE);

$link = mysqli_connect('localhost', 'root', '', 'top');

$touserid = $_GET['mymsg'];

$tousername = mysqli_query($link, "SELECT * FROM users WHERE user_id='$touserid'");
$touserrow = mysqli_fetch_assoc($tousername);
$toname = $touserrow['username'];

$userid = $_SESSION['user_id'];
foreach($userid as $uid){}

$username = $_SESSION['username'];
foreach($username as $uname){}

if(isset($_POST['sendmsg'])){

    $title = $_POST['title'];
    $body = $_POST['body'];

    $send = mysqli_query($link, "INSERT INTO messages (userid, senduserid, title, msgbody, username) VALUES ('$uid', '$touserid', '$title', '$body', '$uname')");

    if($send){
        @include './alerts/good.php';
    }

}


?>
