<?php
require 'connection.php';
session_start();
$category_id=$_GET['id'];
$sql="delete from category where id=$category_id";
$result=$con->query($sql);
if(!$result){
	header("location:category.php?status=failed");
}
else{
	header("location:category.php?status=success");
}


?>