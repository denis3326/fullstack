<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="stl.css">
        <?php include './indexcode.php'?>
        <?php include './code/log.php'?>
        <?php include './code/chatw.php'?>
        <?php include './code/chat.php'?>
        <?php include './code/logout.php'?>
        <?php include './code/chackiflogin.php'?>
        <?php include './alerts/error.php'?>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <img class='navbar-brand' style='height: 60px; width:60px; border-radius: 30px;' src='./images/<?php echo $row['avatar']; ?>'>
            <a class="navbar-brand text-light" href="#"><?php echo $name; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="?home=<?php echo $id; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="?profile=<?php echo $id; ?>">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="?user">Users</a>
                </li>
                <li class="nav-item">
                     <form method="POST">
                        <button class="nav-link text-danger bg-dark border border-dark" name="logout" type="submit">logout</button>
                    </form>
                </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-row">
            <div class="sidechat overflow-hidden">
                <div class="inchat">
                    <h1>Chat</h1>
                </div>
                <br>
                <div class="chatbox overflow-auto">
                    <lu>
                    <?php while($row = mysqli_fetch_assoc($msg)): ?>
                        <li>
                            <div class="msgbox">
                                <h4><?= $row['username'];?></h4>
                                <p><?= $row['msg'];?></p>
                            </div>    
                        <li>
                        <?php endwhile; ?>
                    </lu>
                </div>
                <form method="POST">
                    <div class="msgw">
                        <input name="msg" type="text" placeholder="msg here..">
                        <button type="submit" name="send">send</button>
                    </div>
                </form>
            </div>
                <?php include './pageswicher.php'?>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
