<?php 
					$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
					
					$insert = mysqli_query($connect,"INSERT INTO tweet (post_name,post_image,post_text,account_link,image) VALUES ('Marysmith','imagestwit/avatar.jpg','". $_POST['post_text'] ."','@mary smith','imagestwit/roscosmos.jpg')");
					
  					header('Location: http://begimjan/twitter/index.php'); 
  				
  					




				
?>