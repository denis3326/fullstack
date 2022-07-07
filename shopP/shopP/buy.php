<?php require './code/buyC.php'?>

<div class="container my-5 card text-center">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['itm_title']; ?></h5>
    <p class="card-text"><?php echo $row['itm_text']; ?></p>
    <h5 class="card-title"><?php echo $row['price']; ?>$</h5>
    <br><br>
    <a href="?userInfo=<?php echo $itm_id; ?>" class="btn btn-danger">next to address</a>
  </div>
</div>
<br>


