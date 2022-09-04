<?php

error_reporting(E_ERROR | E_PARSE);
$link = mysqli_connect('localhost', 'root', '', 'top');

$userid = $_GET['inuser'];

$userinfo = mysqli_query($link, "SELECT * FROM users WHERE user_id='$userid'");
$row = mysqli_fetch_assoc($userinfo);
$friendname = $row['username'];

if(isset($_POST['addfrind'])){

    $user_id = $_SESSION['user_id'];
    foreach($user_id as $myid){}

    $user_name = $_SESSION['username'];
    foreach($user_name as $myname){}

    
    $addfrind = mysqli_query($link, "INSERT INTO friends (userid, friendid, username) VALUES ('$myid', '$userid', '$friendname')");

    if($addfrind){
        @include './alerts/good.php';
    }

}

$getfriends = mysqli_query($link, "SELECT * FROM friends WHERE friendid='$userid'");
$num_of_friends = mysqli_num_rows($getfriends);

?>
