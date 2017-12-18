<?php
include 'db.php';

if(isset($_POST['submit'])){
  $name = htmlspecialchars($_POST['newitem']);
  // echo $name;
  $sql = "INSERT INTO tasks (newitem) VALUES ('$name')";
  $value = $db->query($sql);
  if($value){
    // echo 'successfully inserted';
    header('location: index.php');
  }
}




?>
