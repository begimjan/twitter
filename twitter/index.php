<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<style>
		
	</style>

		<div class="container ">
		<div class="row">
			<!--Left column-->
				<div class="col-3">
					<!--profile-->
				    <div class="">
					  	<div class="row">
							<img src="imagestwit/background.jpg" alt="">
						</div>
						<div class="row">
							<div class="col-4 ">
								<img src="imagestwit/avatar.jpg" alt="" style="border-radius: 15px; margin-top: 10px;">
							</div>
							<div class="col-8">
								<div>
									<a href="" >@mary smith</a>
								</div>
								<div>
									<a href="">mary smith</a>
								</div>
								
                             
							</div>
						</div>
						<div class="row">
							<div class="col-6 blue nn">Twits</div>
							<div class="col-6 blue nn">Read</div>
						</div>
						<div class="row">
							<div class="col-6 blue">106</div>
							<div class="col-6 blue">243</div>
						</div>
				 	</div>
				 	<!--актуальные темы-->
					<div class="">
						<div class="nn">
							<h5>
								Актуальные темы для вас
							</h5>
						</div>
						<div class="words blue">
							<h6>USA</h6>
							<h6>RUSSIA</h6>
							<h6>BRAZILIA</h6>
							<h6>SORTH-KOREA</h6>
							<h6>NORTH-KOREA</h6>
						</div>
					</div>
				</div>
					<div class="col-6">
							<form  method="POST"  action="insert.php" enctype="multipart/form-data" >
								<div class="row">
							    	<div style="margin-left: 100px;">
									
										
										<input type="text" style="height: 50px; width:300px; margin-top: 20px; margin-left: 10px;" name="post_text"  
										">
										
										

										
										<button type ="submit" style="
										background: royalblue;
										border-radius: 5px;
										color: white;">

											tweet

										</button>
								</div>
							</div>
						</form>
						
					<?php 
					$connect = mysqli_connect('127.0.0.1','root','','begimjan_17_pn');
					$result = mysqli_query($connect, "SELECT * FROM tweet");

					for($i = 0; $i<$result->num_rows; $i++){
						$res = $result->fetch_assoc();
						

					?>
				

		      			
					
					
						<div class="row">
							<div class="col-2" >
								
								<img src="<?php  echo $res["post_image"]?>" class="w-100 rounded-circle">
								
							</div>
							<div class="col-10">
								<h2>
									<?php echo $res["post_name"] ?>
								</h2>
								<p>
									<?php echo $res["post_text"] ?>
								</p>
								<a href="#"> <?php echo $res["account_link"] ?></a>

								<img src="<?php  echo $res["image"]?>" class="w-100 ">
								
								
								<form method="POST"  action="delete.php">
 	   									<?php echo '<input type="hidden" name = "id" value="' . $res['id'] . '">';?>
 	   							 	<button style="margin-left: 400px;
									margin-top: 20px;
									background: royalblue;
									border-radius: 5px;
									color: white;">
									delete
									</button>
								</form>
								<form method="POST"action="update0.php
								">
								<?php echo '<input type="hidden" name = "id" value="' . $res['id'] . '">';?>
 	 							<?php echo '<input type="hidden" name = "post_image" value="' . $res['post_image'] . '">';?>
 	 							<?php echo '<input type="hidden" name = "account_link" value="' . $res['account_link'] . '">';?>
 	 							<?php echo '<input type="hidden" name = "post_text" value="' . $res['post_text'] . '">';?>
								<?php echo '<input type="hidden" name = "image" value="' . $res['image'] . '">';?>


								<button style="
										background: royalblue;
										border-radius: 5px;
										color: white;" >
										редактировать
								</button>
						
								</form>
								
                           
							</div>
						</div>
				
					<?php
					}

					 ?>
						
					</div>
					<!--right-->
						<div class="col-3">
								<div>
									<div class="row">
										<h6>Кого читать</h6>
										<h6 style="color: blue; margin-left: 25px;">Обновить все</h6>
									</div>
								</div>

								<div>
									<div class="row">
										<div class="col-4">
											<img src="imagestwit/post1.jpg" alt="" class="w-100 rounded-circle">
										</div>
										 <div class="col-8">
											<a href="" style="margin-left: 35px;">onedio.ru</a>
											<a href="">@onediorussia</a>
										
										 	<button style="border-radius: 5px;
										 	    color: blue;
										 	    background: white;

										 	">
											Читать 
											</button>
										 </div>
										 
										 <div class="col-4 ">
											<img src="imagestwit/2.jpg" alt="" style="border-radius: 25px;"
											style="margin-top: 10px;
											">
										</div>
										 <div class="col-8" style="margin-top: 10px;
										 ">
											<a href="" style="margin-left: 35px;">ЖИЗА</a>
											<a href="">@jizajiza</a>
										
										 	<button style="border-radius: 5px;
										 	    color: blue;
										 	    background: white;

										 	">
											Читать 
											</button>
										 </div>
										
										
										
									
									
										
																			
									</div>
								</div>

						</div>
		</div>
	</div>
</body>
</html>