 <?php include("views/menu.php"); ?>







	<?php for($i=1; $i < 2; $i++):
			echo $_POST["x".$i];
			echo '</br>';

	 ?>
	<?php endfor; ?>

	<?php for($i=1; $i < 2; $i++):
			echo $_POST["conx".$i];
			echo '</br>';

	 ?>
	<?php endfor; ?>










<?php include("views/footer.php"); ?>