<?php require './code/adminOrder.php'?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Your orders</h1>
    <p class="lead">oreders that you need too send to the buyer</p>
  </div>
</div>

<div class="row">
        <div class="row">
            <div class="col-xl-10" >
                <ul style="display: flex; ">    
                    <?php if($BuyResult && mysqli_num_rows($BuyResult) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($BuyResult)):?>
                            <li class="mx-3" style="list-style-type: none;">
                                <div class="card" style="width: 18rem; box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
                                    <div class="card-body">
                                    <h5 class="card-title">user name: <?= $row['user_name']; ?></h5>
                                    <p class="card-text">item: <?= $row['itm_title']; ?></p>
                                    <p class="card-text">count: <?= $row['count']; ?></p>
                                    <p class="card-text">country: <?= $row['country']; ?></p>
                                    <p class="card-text">phone: <?= $row['phone']; ?></p>
                                    <p class="card-text">address: <?= $row['address']; ?></p>
                                    <p class="card-text">home: <?= $row['home_num']; ?></p>
                                    <p class="card-text">msg from buyer: <?= $row['msg']; ?></p>
                                    <h5 class="text-danger">paid</h5>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php endif;?>
                        
                 </ul>
            </div>
    </div>
</div>