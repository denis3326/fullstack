<?php include './code/homec.php'; ?>

<div class="card text-center my-5 mx-5 bg-dark text-light col-lg-2">
  <div class="card-header">
    add post
  </div>
    <form class="col-lg-10 mx-4" method="POST" enctype="multipart/form-data">
        <div class="form-group my-2">
            <label for="exampleInputEmail1">post title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">post body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-group my-3">
            <label for="exampleFormControlFile1">upload image</label>
            <input name="uploadfile" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button name="post" type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
</div>


<lu class="mx-auto my-5" style="list-style-type: none;">
<?php while($row = mysqli_fetch_assoc($getposts)): ?>
    <li class="my-3">
    <div class="card" style="width: 40rem;">
    <div class="card-header">
        @<?= $row['username']?>
    </div>
    <img src="./images/<?= $row['img']?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $row['title']?></h5>
        <hr>
        <p class="card-text"><?= $row['text']?></p>
    </div>
    </div>
    </li>
<?php endwhile; ?>
</lu>