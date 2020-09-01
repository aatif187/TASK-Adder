<?php
include"db.php";
if(isset($_POST['Add']))
{

$new_task= $_POST['task'];

$sql="insert into task (name) values('$new_task')";
$val= $db->query($sql);

if($val){
  header('location:index.php');
}
}



 ?>
