<meta charset="utf-8">
<form action="update.php" method="POST">
	<?php echo '<input type="hidden" name = "id" value="' . $_POST['id'] . '">';?>
		<?php echo '<input type="hidden" name = "post_image" value="' . $_POST['post_image'] . '">';?>
		<?php echo '<input type="hidden" name = "account_link" value="' .$_POST['account_link'] . '">';?>
 	 		<?php echo '<input  name = "post_text" value="' . $_POST['post_text'] . '">';?>
 	 			<?php echo '<input type="hidden" name = "image" value="' . $_POST['image'] . '">';?>
		

		<button>
			safe
		</button>
</form>
