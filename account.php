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
			echo '<p><a href="orders.php"><button class=btntopbar style="width:10%"><i class="fas fa-sign"></i>&ensp;My orders</button></a></p>';
			echo "</div>";
		}
		else
		{
			echo "<div class='col-12'>";
			echo "<h4>Not logged in.</h4>";
			echo "</div>";
		}
	?>
	
</body>
</html>