<!DOCTYPE html>
<?php include 'db.php';

if(isset($_POST['search'])){
  $name = htmlspecialchars($_POST['search']);
  $sql = "SELECT * FROM tasks WHERE newitem like '%$name%'";
  $rows = $db->query($sql);

}
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <title>PHP-todoapp</title>
</head>
<body>

  <div class="container">
    <div class="row" style="margin-top: 70px;">

      <center><h1>To Do List</h1></center>
      <div  class="col-md-10 col-md-offset-1">

          <button type="button" data-target="#AlertBox" data-toggle="modal" class="btn btn-success">Add Task</button>
          <button type="button" class="btn btn-default pull-right" onclick="print()" >Print</button>
          <hr><br>

          <!-- Modal -->
          <div id="AlertBox" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add a new Item to the List</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action="add.php">
                    <div class="form-group">
                      <label>New Item</label>
                      <input type="text" required name="newitem" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Add" class="btn btn-success">
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
  <div class="col-md-12 text-center">
    <p>Search</p>
    <form method="post" action="search.php" class="form-group">
      <input type="text" class="form-control" placeholder="Search" name="search" >
    </form
  </div>

  <?php if(mysqli_num_rows($rows) < 0): ?>
    <h3 class="text-danger text-center">Nothing found.</h3>
    <a href="index.php" class="btn btn-warning">Cancel</a>
  <?php else: ?>

  <table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>Task</th>
    </tr>
  </thead>

  <tbody>
    <tr>
<?php while($row = $rows->fetch_assoc()): ?>

      <th><?= $row['id'] ?></th>
      <td class="col-md-10"><?= $row['newitem'] ?></td>
      <td><a href="update.php?id= <?= $row['id']; ?>" class="btn btn-success">Edit</a></td>
      <td><a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
<?php endwhile; ?>

  </tbody>
</table>
<?php endif; ?>

      </div>
    </div>
  </div>

</body>
</html>
