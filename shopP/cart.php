<?php require './code/cartC.php'?>

<div class="container my-5">
<div class="card text-center col-xl-12">
  <div class="card-header">
    your items
  </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">title</th>
      <th scope="col">price</th>
      <th scope="col">count</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php if($cartResult && mysqli_num_rows($cartResult) > 0):?>
        <?php while($row = mysqli_fetch_assoc($cartResult)):?>
    <tr>
            <td><?= $row['itm_title']; ?></td>
            <td><?= $row['price']; ?>$</td>
            <td><a class="btn btn-danger" href="?buy=<?= $row['itm_id']?>">BUY</a></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>
</div>
        </div>