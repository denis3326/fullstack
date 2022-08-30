<?php include './code/inuserc.php'; ?>

<div class="card text-center bg-dark text-light mx-auto my-5 col-lg-2">
  <div class="card-header">
    user info
  </div>
  <div class="card-body">
    <img style="height: 140px; width: 140px; border-radius: 70px;" class="card-img-top" src="./images/<?php echo $row['avatar']?>" alt="Card image cap">
    <h5 class="card-title my-2">@<?php echo $row['username'] ?></h5>
    <p class="card-text">firstname: <?php echo $row['firstname']?></p>
    <p class="card-text">lastname: <?php echo $row['lastname']?></p>
    <p class="card-text">country: <?php echo $row['country']?></p>
    <p class="card-text">friends: <?php echo $num_of_friends; ?></p>
    <div class="d-flex flex-row">
    <a href="?mymsg=<?php echo $userid; ?>" class="btn btn-primary my-4 mx-5">send message</a>

    <form method="POST">
        <button name="addfrind" type="submit"  class="btn btn-primary my-4">add to friends</button>
    </form>
    </div>
  </div>
</div>