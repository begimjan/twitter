<?php 
	$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
	$id =$_POST['id'];
	$result = mysqli_query($connect, "DELETE FROM tweet WHERE id = '$id'");
	header('Location: http://begimjan/twitter/index.php');
 ?>
