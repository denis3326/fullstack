<?php


if(isset($_POST['create'])){

    $conn = mysqli_connect('localhost', 'root', '', 'shopp');

    $firstName = $_POST['Fname'];
    $lastName = $_POST['Lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $REpassword = $_POST['REpassword'];

    $passH = hash('md5', $password);

    

    if(!empty($_POST['password'])){

        $sqlCreate = "INSERT INTO users (user_id, firstName, lastName, email, user_password) VALUES ('', '$firstName', '$lastName', '$email', '$passH')";
        mysqli_query($conn, $sqlCreate);

        header('location: ../shopP/login.php');
    }
    

}



?>