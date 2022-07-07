<?php require './code/multiPageC.php' ?>

<div class="my-2">
        <div class="">
            <div class="">
                <ul class="" style="display: grid; grid-template-columns: auto auto auto auto auto auto;">    
                    <?php if($itmResult && mysqli_num_rows($itmResult) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($itmResult)):?>
                            <li class="mx-1" style="list-style-type: none;">
                                <div class="card my-2" style="width: 18rem;">
                                    <img src="./assets/img/<?= $row['itm_img']; ?>" class="card-img-top" height="250">
                                    <div class="card-body">
                                     <h5 class="card-title"><?= $row['itm_title']; ?></h5>
                                    <p class="card-text"><?= $row['itm_text']; ?></p>
                                    <h5 class="card-text"><?= $row['price']; ?>$</h5>
                                    <a href="?item=<?= $row['itm_id']; ?>" class="btn btn-danger">BUY</a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php endif;?>
                        
                 </ul>
            </div>
    </div>
</div>
