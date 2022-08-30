<?php include './code/showfriendsc.php'?>

<div class="card mx-auto my-5 bg-dark text-light" style="width: 18rem;">
  <div class="card-header">
    you'r friends
  </div>
  <ul class="list-group list-group-flush">
  <?php while($row = mysqli_fetch_assoc($friends)): ?>
    <li class="list-group-item bg-dark text-light"><?= $row['username']?></li>
    <?php endwhile; ?>
  </ul>
</div>