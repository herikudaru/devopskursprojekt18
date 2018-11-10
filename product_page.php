<?php
	require 'functions.php';
	$product_id = $_GET["productid"];
	$str = file_get_contents("https://productsdb-devops-arcada-2018.herokuapp.com/api/product/" . $product_id);
	$json_obj = json_decode($str, true);
	
?>

<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<div class="col-12">
		<?php 
			echo "<h2>" . $json_obj[0]['name'] . "</h2></br>";
			echo "<h4>" . $json_obj[0]['brand'] . "</h4></br>";
		?>
	</div>
	
	<div class="col-6">
		<?php
			echo "<p>Description: " . $json_obj[0]['description'] . "</p>";
			echo "<p>Sex: " . $json_obj[0]['gender'] . "</p>";
			echo "<p>Size: " . $json_obj[0]['size'] . "</p>";
			echo "<p>Color: " . $json_obj[0]['color'] . "</p>";
			echo "<p>Price: " . $json_obj[0]['price'] . "€</p>";
		
			echo "<form method='post'>";
			echo "<input type='submit' name='add' value='Add to cart'>";
			
				if (isset($_POST['add']))
				{
					array_push($_SESSION['shopping_cart'],$json_obj[0]['id']);
					header("Refresh:0");
				}
			
			echo "</form>";
		?>
	</div>

	<div class="col-6">
		<?php
			echo "<a href='https://placeholder.com'><img src='https://via.placeholder.com/350x150'></a>";
		?>
	</div>
	
</body>
</html>