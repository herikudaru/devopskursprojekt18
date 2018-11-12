<?php
	require 'functions.php';
?>
<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<form method="post" action="account_edit.php">
		Name:<br>
		<input type="text" name="name"><br>
		Email:<br>
		<input type="email" name="email"><br>
		Password:<br>
		<input type="password" name="password"><br>
		Address:<br>
		<input type="text" name="adress"><br>
		Postnumber:<br>
		<input type="text" name="postnummer"><br>
		City:<br>
		<input type="text" name="stad"><br>
		<input type="submit" value="Edit" name="edit">
	</form>

	<?php
		if (isset($_POST['edit']))
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$adress = $_POST['adress'];
			$postnummer = $_POST['postnummer'];
			$stad = $_POST['stad'];
			
			if ($name !== "" || empty($name)){$name = $_SESSION['user_info']['name'];}
			if ($email !== "" || empty($email)){$email = $_SESSION['user_info']['email'];}
			//if ($password !== "" || empty($password)){$password = $_SESSION['user_info']['password'];}
			if ($adress !== "" || empty($adress)){$adress = $_SESSION['user_info']['adress'];}
			if ($postnummer !== "" || empty($postnummer)){$postnummer = $_SESSION['user_info']['postnummer'];}
			if ($stad !== "" || empty($stad)){$stad = $_SESSION['user_info']['stad'];}
			
			update_user_info(	$name, $email, $password, 
								$adress, $postnummer, $stad);
		}
	?>
	
	<?php 
		require "footer.php";
	?>
	
</body>
</html>