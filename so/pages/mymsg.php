<?php include './code/mysmgc.php'?>

<div class="card text-center mx-auto my-5 bg-dark text-light col-lg-3">
  <div class="card-header">
    send message
  </div>
  <div class="card-body">
  <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group my-4">
    <label for="exampleFormControlTextarea1">message body</label>
    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <button name="sendmsg" type="submit" class="btn btn-primary my-4">send message</button>
</form>
  </div>
</div>