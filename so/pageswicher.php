<?php

if(isset($_GET['home'])){
    require './pages/home.php';
    return;
}

if(isset($_GET['profile'])){
    require './pages/profile.php';
    return;
}

if(isset($_GET['user'])){
    require './pages/userprofiles.php';
    return;
}

if(isset($_GET['inuser'])){
    require './pages/inuser.php';
    return;
}

if(isset($_GET['friends'])){
    require './pages/showfriends.php';
    return;
}

if(isset($_GET['mymsg'])){
    require './pages/mymsg.php';
    return;
}

if(isset($_GET['viewmsg'])){
    require './pages/viewmsg.php';
    return;
}

?>