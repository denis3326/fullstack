<?php require './code/userInfoC.php'?>

<form method="POST" class="container my-4">
<div class="card">
  <div class="card-header">
    Address info
    </div>
    <div class="card-body">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">contry</span>
    </div>
    <input name="country" type="text" class="form-control" placeholder="your contry" aria-label="" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
    <input name="phone" type="text" class="form-control" placeholder="your phone number" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">Phone number</span>
    </div>
    </div>

    <label for="basic-url">home address</label>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">street address</span>
    </div>
    <input name="address" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>

    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">home number</span>
    </div>
    <input name="address_num" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    </div>

    <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">message to seeler</span>
    </div>
    <textarea name="msg" class="form-control" aria-label="With textarea"></textarea>
    </div>
    count: <input type="number" name="count" class="my-2"><br><br>
    <input type="submit" name="buy" value="Confirm" class="btn btn-danger my-4">
  </div>
</div>
</form>