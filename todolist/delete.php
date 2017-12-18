<?php
include 'db.php';

$id = (int)$_GET['id'];
// echo $id;
$sql = "DELETE FROM tasks WHERE id = '$id'";
$delete = $db->query($sql);
  if($delete){
    // echo 'deleted the selected item';
    header('location: index.php');

  }
 ?>
