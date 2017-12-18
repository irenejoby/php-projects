<?php

$db = new Mysqli;
$db->connect('localhost', 'root', 'root', 'todoapp');
if(!$db){
  echo 'successfully created a new database';
}

 ?>
