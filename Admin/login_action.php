<?php
require 'connection.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from admin where username='$username'and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	$_SESSION['admin']=true;
	header("location:dashboard.php?status=success");
}
else{
	header("location:index.php?status=failed");
}
?>