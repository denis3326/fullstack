<?php

if(isset($_POST['login'])){

    $conn = mysqli_connect('localhost', 'root', '', 'shopp');

    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $passH = hash('md5', $password);

    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "<script type='text/javascript'>alert('fill all inputs');</script>";
    }

    $sqlLogin = "SELECT user_id FROM users WHERE email='$email' AND user_password='$passH'";
    $resultLogin = mysqli_query($conn, $sqlLogin);
    $rowLogin = mysqli_fetch_assoc($resultLogin);
    $count = mysqli_num_rows($resultLogin);


    $sqlInfo = "SELECT firstName FROM users WHERE email='".$_POST['email']."'";
    $resultInfo = mysqli_query($conn, $sqlInfo);
    $rowInfo = mysqli_fetch_assoc($resultInfo);

    $sqlInfoId = "SELECT user_id FROM users WHERE email='".$_POST['email']."'";
    $resultInfoId = mysqli_query($conn, $sqlInfoId);
    $rowInfoId = mysqli_fetch_assoc($resultInfoId);


 
    if($count == 1){
        session_start();
        $_SESSION['user_id'] = $rowInfoId;
        $_SESSION['user_name'] = $rowInfo;
            

        header('location: ./index.php?pages=1');
    }
    else{
        echo "<script type='text/javascript'>alert('email or password not correct');</script>";
    }




    if($rowLogin == 0){
        $_SESSION['user_id'] = $rowInfoId;
        $_SESSION['user_name'] = $rowInfo;
            

        header('location: ./indexAdmin.php?nav');
    }
}




?>