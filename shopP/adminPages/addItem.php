<?php include './code/admin.php'; ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Create new item</h1>
    <p class="lead">new item</p>
  </div>
</div>


<div class="row my-3">
<br>
<div class="container card text-center col-xl-4"  style="box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
  <div class="card-header bg-success">
    category id
  </div>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">category</th>
      <th scope="col">category id</th>
    </tr>
  </thead>
  <tbody>
  <?php if($selectCatId && mysqli_num_rows($selectCatId) > 0):?>
        <?php while($row = mysqli_fetch_assoc($selectCatId)):?>
    <tr>
            <td><?= $row['nav_title']; ?></td>
            <td><?= $row['nav_id']; ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>
</div>

<div class="container col-xl-6 ">
<div class="card text-center border border-success" style="box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
  <div class="card-header bg-success">
    add item
  </div>
  <form method="POST" enctype="multipart/form-data">
  <div class="card-body">
  <div class="form-group">
    <label for="exampleInputEmail1">item title</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">item_text</label>
    <input name="text" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input name="price" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">category id</label>
    <input name="categoryId" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">category</label>
    <input name="category" type="text" class="form-control">
  </div>
  </div>
  <div class="card-footer text-muted">
  Select image to upload:
  <input class="btn btn-success" type="file" name="Uploadfile" id="fileToUpload">
  <br><br>
  <input class="btn btn-danger" type="submit" value="Upload item" name="addItm">
</form>

  </div>
</div>
</div>
        </div>