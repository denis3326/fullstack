<?php include './code/adminChange.php'; ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Change item info or delete item</h1>
    <p class="lead">Delete/change</p>
  </div>
</div>

<div class="card text-center container my-5 border border-warning" style="width: 18rem; box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
  <img src="./assets/img/<?php echo $rowImg['itm_img']; ?>" class="card-img-top" alt="...">
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">item title</label>
    <input name="title" type="text" class="form-control" placeholder="<?php echo $rowImg['itm_title']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">item_text</label>
    <input name="text" type="text" class="form-control" placeholder="<?php echo $rowImg['itm_text']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input name="price" type="text" class="form-control" placeholder="<?php echo $rowImg['price']; ?>">
  </div>
  <button name="change" type="submit" class="btn btn-primary">Change</button>
</form>
<br>
<form method="POST">
    <button name="Delete" type="submit" class="btn btn-danger my-2">Delete</button>
</form>
</div>