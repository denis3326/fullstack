<?php
    $data = [];

    if(isset($_POST['send'])){

        $link = mysqli_connect('localhost', 'unibook', 'Denis260401', 'deni11');

        $username = $_SESSION['username'];
        foreach($username as $name){}

        $msg = $_POST['msg'];

        if(empty($msg)){
            return 0;
        }
        if(!empty($msg)){
            $sendmsg = mysqli_query($link, "INSERT INTO chat (username, msg) VALUES ('$name', '$msg')");
        }
        

    }

?>