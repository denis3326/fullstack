<?php include './code/userprofiles.php'?>

<div class="card bg-dark text-light mx-auto my-5 col-lg-3">
  <div class="card-header">
    find users
  </div>
  <div class="card-body">
  <form method='POST'>
  <div class="form-group my-3">
    <label for="exampleInputEmail1">username</label>
    <input name='usern' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
    <button name='find' class="btn btn-primary my-3">find</button>
  </div>
</form>


<div class="card text-center bg-dark my-5 mx-auto text-light">
  <div class="card-header">
    results
  </div>
  <div class="card-body d-flex flex-row">
    <lu style="list-style-type: none;">
    <?php if($users && mysqli_num_rows($users) > 0):?>
    <?php while($row = mysqli_fetch_assoc($users)): ?>
      <li>
      <div class="card bg-dark text-light text-center" style="width: 10rem;">
          <div class="card-header">
        @<?= $row['username']?>
      </div>
        <img class="card-img-top" src="./images/<?= $row['avatar']?>" alt="Card image cap">
        <div class="card-body">
          <a href="?inuser=<?= $row['user_id']?>" class="btn btn-primary my-3">to user</a>
        </div>
      </div>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </lu>
  </div>
</div>

