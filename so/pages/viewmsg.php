<?php include './code/viewmsgc.php';?>

<div class="card bg-dark text-light mx-5 my-5" style="width: 18rem;">
  <div class="card-header">
    your messages
  </div>
  <ul class="list-group list-group-flush">
  <?php while($row = mysqli_fetch_assoc($mymsg)): ?>
    <li class="list-group-item bg-dark text-light my-4">
        <h6>from: <?= $row['username'];?></h6>
        <h6>title: <?= $row['title'];?></h6>
        <h6>message: <?= $row['msgbody'];?></h6>
    </li>
    <?php endwhile; ?>
  </ul>
</div>