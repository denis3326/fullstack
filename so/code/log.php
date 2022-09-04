<?php
    $error = null;

    if(isset($_POST['log'])){
        if( empty($_POST['email'] || empty($_POST['password']))){
            
        }

        $link = mysqli_connect('localhost', 'root', '', 'top');
        
        $resultEmail = mysqli_real_escape_string($link, $_POST['email']);
        $resultPass = mysqli_real_escape_string($link, $_POST['password']);

        $hashLog = hash('sha1', $resultPass);

        $sql = "SELECT user_id FROM users WHERE email = '$resultEmail' and password = '$hashLog'";
        $result = mysqli_query($link,$sql);

        $count = mysqli_num_rows($result);

        $user = mysqli_query($link, "SELECT username FROM users WHERE email = '".$_POST['email']."'");

        $row = mysqli_fetch_assoc($user);

        $useridForPost = mysqli_query($link, "SELECT user_id FROM users WHERE email = '".$_POST['email']."'");

        $rowPost = mysqli_fetch_assoc($useridForPost);


        

        if($count == 1) {
            
            session_start();
            $_SESSION['username'] = $row; // name
            $_SESSION['user_id'] = $rowPost;// id num

            foreach($rowPost as $id){}

            header('location: ../index.php?home='.$id.''); 
         }
         else{
             echo '';
         }
        

    }

?>
