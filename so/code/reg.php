<?php
    $data = [];

    if(isset($_POST['reg'])){
        if( empty($_POST['email'] || empty($_POST['password']))){
            $data['errorMassege'] = '';
        }

        $link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

        $username = mysqli_real_escape_string( $link, $_POST['username'] );
        $email = mysqli_real_escape_string( $link, $_POST['email'] );
        $password = mysqli_real_escape_string( $link, $_POST['password'] );
        $hash = hash('sha1', $password);


        $regUser = mysqli_query($link, "INSERT INTO users (username, Email, password) VALUES ('$username', '$email', '$hash')");

        
        header('location: ./login.php');
        

    }

?>