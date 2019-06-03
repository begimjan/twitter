<?php 
		$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
		$sql=mysqli_query($connect,"UPDATE tweet SET post_name='" . $_POST['post_name'] . "',  post_image='" . $_POST['post_image'] . "',  post_text='" . $_POST['post_text'] . "', image='" . $_POST['image'] . "',account_link='" . $_POST['account_link'] . "'  WHERE id='" . $_POST['id'] . "'");
  		header('Location: http://begimjan/twitter/index.php');
 ?>