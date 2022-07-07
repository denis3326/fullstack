<?php require './code/admin.php'?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">nav controll</h1>
    <p class="lead">here you can add and delete nav components</p>
  </div>
</div>

<div class="container">
    <div class="card container text-center" style="box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
  <div class="card-header bg-success">
  </div>
  <div class="card-body">
  <div class="container col-xl-4">
        <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">correct nav name</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($navResult)):?>
            <tr>
            <td><?= $row['nav_title']; ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
    </div>
  </div>
</div>
<br>
    <div class="card text-center col-xl-6 container" style="box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.75);">
    <div class="card-header bg-success">
        potions
    </div>
    <div class="card-body">
    <form method="POST">
        <input type="text" name="navName" placeholder="new nav name">
        <button type="submit" name="add" class="btn btn-success">Add nav content</button>
    </form>

    <br><br>

    <form method="POST">
        <input type="text" name="navNameDel" placeholder="nav name to delete">
        <button type="submit" name="del" class="btn btn-danger">Delete nav content</button>
    </form>
    </div>
    </div>
</div>