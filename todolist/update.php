<!DOCTYPE html>
<?php
include 'db.php';

$id = (int)$_GET['id'];
$sql = "SELECT * FROM tasks WHERE id = '$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
// var_dump($row);
if(isset($_POST['submit'])){
  $newitem = htmlspecialchars($_POST['newitem']);
  $sql2 = "UPDATE tasks set name = '$newitem' WHERE id = '$id'";
  $db->query($sql2);
  header('location: index.php');
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

      <center><h1>Update-To Do List</h1></center>
      <div  class="col-md-10 col-md-offset-1">
          <hr><br>
                  <form method="post" action="add.php">
                    <div class="form-group">
                      <label>Edit item</label>
                      <input type="text" required name="newitem" value="<?= $row['newitem']; ?>" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Confirm Editing" class="btn btn-success">
                    &nbsp;
                    <a href="index.php" class="btn btn-warning">Cancel Editing </a>
                  </form>
      </div>
    </div>
  </div>

</body>
</html>
