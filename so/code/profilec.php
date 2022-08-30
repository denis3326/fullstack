<?php

$userid = $_GET['profile'];


if(isset($_POST['profile'])){

    $link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "./images/".$filename;


    if(empty($firstname) || empty($lastname) || empty($phone) || empty($country)){
        @include './alerts/error.php'; 
    }

    if(!empty($firstname) || !empty($lastname) || !empty($phone) || !empty($country)){

        $profileupdate = mysqli_query($link, "UPDATE users SET firstname='$firstname', lastname='$lastname', phone='$phone', country='$country', avatar='$filename' WHERE user_id='$userid'");

        if($profileupdate && move_uploaded_file($tempname, $folder)){
            @include './alerts/good.php';
        }


    }
}

$info = mysqli_query($link, "SELECT * FROM users WHERE user_id='$userid'");
$row = mysqli_fetch_assoc($info);

$user_id = $_SESSION['user_id'];
    foreach($user_id as $myid){}

$getfriends = mysqli_query($link, "SELECT * FROM friends WHERE userid='$myid'");
$num_of_friends = mysqli_num_rows($getfriends);



?>