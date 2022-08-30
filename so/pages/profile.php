<?php include './code/profilec.php'?>

<div class="card my-5 mx-auto bg-dark text-light col-lg-4 col-md-6 d-flex flex-row">
  <h5 class="card-header">Profile</h5>
  <div class="card-body">
    <h5 class="card-title">add/update your information</h5>
    <div class="card bg-dark col-lg-4 col-md-4" style="width: 25rem;">
        <div class="card-body col-lg-10 col-md-10">
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">first name</label>
            <input name="firstname" type="text" class="form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">last name</label>
            <input name="lastname" type="text" class="form-control my-3" id="exampleInputPassword1" placeholder="last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">phone number</label>
            <input name="phone" type="number" class="form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="phone num">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">country</label>
            <input name="country" type="text" class="form-control my-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="your country">
        </div>
        <div class="form-group my-3">
            <label for="exampleFormControlFile1">upload avatar</label>
            <input name="uploadfile" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button name="profile" type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
  </div>

  <div class="card bg-dark text-light col-lg-1 col-md-2" style="width: 20rem;">
  <div class="card-header">
    user profile
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-dark text-light">firstname: <?php echo $row['firstname']?></li>
    <li class="list-group-item bg-dark text-light">lastname: <?php echo $row['lastname']?></li>
    <li class="list-group-item bg-dark text-light">phone: <?php echo $row['phone']?></li>
    <li class="list-group-item bg-dark text-light">country: <?php echo $row['country']?></li>
    <li class="list-group-item bg-dark text-light my-4">friends: <?php echo $num_of_friends?></li>
    <li class="list-group-item bg-dark text-light"><a href="?friends=<?php echo $userid?>">show friends</a></li>
    <li class="list-group-item bg-dark text-light"><a href="?viewmsg=<?php echo $userid?>">view my messages</a></li>
  </ul>
</div>
</div>