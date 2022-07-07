<?php require './code/adminItmView.php'?>

<div class="row">
        <div class="row">
            <div class="col-xl-10">
                <ul style="display: grid; grid-template-columns: auto auto auto auto auto auto;">    
                    <?php if($itmResult && mysqli_num_rows($itmResult) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($itmResult)):?>
                            <li class="mx-3 my-2" style="list-style-type: none;">
                                <div class="card" style="width: 18rem;">
                                    <img src="./assets/img/<?= $row['itm_img']; ?>" class="card-img-top" style="width: 18rem;" alt="...">
                                    <div class="card-body">
                                     <h5 class="card-title"><?= $row['itm_title']; ?></h5>
                                    <p class="card-text"><?= $row['itm_text']; ?></p>
                                    <h5 class="card-text"><?= $row['price']; ?>$</h5>
                                    <a href="?itemChange=<?= $row['itm_id']; ?>" class="btn btn-warning">change</a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php endif;?>
                        
                 </ul>
            </div>
    </div>
</div>