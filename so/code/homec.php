<?php

$link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');


if(isset($_POST['post'])){

$title = $_POST['title'];
$body = $_POST['body'];


if(empty($title) || empty($body)){
    @include './alerts/error.php';
}

if(!empty($title) || !empty($body)){

    $userid = $_GET['home'];
    foreach($userid as $id){}

    $username = $_SESSION['username'];
    foreach($username as $uname){}

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "./images/".$filename;

    $addpost = mysqli_query($link, "INSERT INTO posts (postid, userid, username, title, text, img) VALUES ('', '$userid', '$uname', '$title', '$body', '$filename')");

    if (move_uploaded_file($tempname, $folder) && $addpost){
        @include './alerts/good.php';
    }else{
        @include './alerts/error.php';
    }
}

}


$getposts = mysqli_query($link, "SELECT * FROM posts ORDER BY postid DESC");


?>