<?php require './code/viewItmC.php'?>
<?php require './code/addToCartC.php'?>

<div class="card text-center">
<img src="./assets/img/<?php echo $row['itm_img']?>" class="card-img-top container" style="width: 300px;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['itm_title']; ?></h5>
    <p class="card-text"><?php echo $row['itm_text']; ?></p>
    <h5 class="card-title"><?php echo $row['price']; ?>$</h5>
    <br><br>
    <form method="POST">
        <button type="submit" name="add" id="add" class="btn btn-primary">add to cart</button>
    </form>
  </div>
</div>
<br>

<div class="card">
  <h5 class="card-header">maby you want somting</h5>
  <div class="card-body">
  <ul style="display: flex; ">    
        <?php if($itmResult && mysqli_num_rows($itmResult) > 0):?>
            <?php while($row = mysqli_fetch_assoc($itmResult)):?>
                <li class="mx-3" style="list-style-type: none;">
                    <div class="card" style="width: 12rem;">
                        <img src="./assets/img/<?= $row['itm_img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"><?= $row['itm_title']; ?></h5>
                        <p class="card-text"><?= $row['itm_text']; ?></p>
                        <h5 class="card-text"><?= $row['price']; ?>$</h5>
                        <a href="" class="btn btn-danger">BUY</a>
                        <br><br>
                        <a href="#" class="btn btn-primary">add to cart</a>
                    </div>
                </li>
            <?php endwhile; ?>
        <?php endif;?>             
     </ul>
  </div>
</div>
