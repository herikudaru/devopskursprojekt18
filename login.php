<?php
	require 'functions.php';
?>
<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<form method="post" action="login.php">
		Email:<br>
		<input type="email" name="email"><br>
		Password:<br>
		<input type="password" name="password">
		<br>
		<input type="submit" value="Login" name="submit">
	</form>

<?php
	if (isset($_POST['submit']))
	{
		auth_login($_POST['email'], $_POST['password']);
		echo $_POST['email'];
	}
?>
	
</body>
</html>