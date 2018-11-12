<?php
	require 'functions.php';
?>
<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<?php
		if (isset($_SESSION['user_info']))
		{
			echo "<div class='col-12'>";
			echo "<h4>Account info:</h4>";
			echo "<p>Name: " . $_SESSION['user_info']['name'] . "</p>";
			echo "<p>Email: " . $_SESSION['user_info']['email'] . "</p>";
			echo "<p>Address: " . $_SESSION['user_info']['adress'] . "</p>";
			echo "<p>City: " . $_SESSION['user_info']['stad'] . "</p>";
			echo "<p>Zip/Postal code: " . $_SESSION['user_info']['postnummer'] . "</p>";
			echo "<a href='account_edit.php'><button>Edit</button></a>";
			echo "</div>";
		}
		else
		{
			echo "<div class='col-12'>";
			echo "<h4>Not logged in.</h4>";
			echo "</div>";
		}
	?>
	
	<?php 
		require "footer.php";
	?>
	
</body>
</html>