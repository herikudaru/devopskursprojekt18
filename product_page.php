<?php
	require 'functions.php';
	$product_id = $_GET["productid"];
	$product_str = file_get_contents("https://productsdb-devops-arcada-2018.herokuapp.com/api/product/" . $product_id);
	$product_json_obj = json_decode($product_str, true);
	$stores_str = file_get_contents("https://devopstoresapp.herokuapp.com/api/stores");
	$stores_json_obj = json_decode($stores_str, true);
?>

<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<div class="col-12">
		<?php
			echo "<h2>" . $product_json_obj[0]['name'] . "</h2></br>";
			echo "<h4>" . $product_json_obj[0]['brand'] . "</h4></br>";
		?>
	</div>
	
	<div class="col-6">
		<?php
			echo "<p>Description: " . $product_json_obj[0]['description'] . "</p>";
			echo "<p>Sex: " . $product_json_obj[0]['gender'] . "</p>";
			echo "<p>Size: " . $product_json_obj[0]['size'] . "</p>";
			echo "<p>Color: " . $product_json_obj[0]['color'] . "</p>";
			echo "<p>Price: " . $product_json_obj[0]['price'] . "€</p>";
			
			echo "<form method='post'>";
			echo "<input type='submit' name='add' value='Add to cart'>";
			
				if (isset($_POST['add']))
				{
					array_push($_SESSION['shopping_cart'],$product_json_obj[0]['id']);
					header("Refresh:0");
				}
			
			echo "</form>";
		?>
	</div>

	<div class="col-6">
		<?php
			$inventory_str = file_get_contents("https://devopstoresapp.herokuapp.com/api/inventories/stores");
			$inventory_json_obj = json_decode($inventory_str, true);
			echo "<h4>Availability:</h4>";
			for($i = 0; $i < count($stores_json_obj); $i++)
			{
				echo "<p>" . $stores_json_obj[$i]['storeName'] . ": ";
				for($j = 0; $j < count($inventory_json_obj); $j++)
				{
					if((string)$inventory_json_obj[$j]['prodId'] === $product_id && $stores_json_obj[$i]['storeId'] === $inventory_json_obj[$j]['storeId'])
					{
						echo $inventory_json_obj[$j]['qty'] . "</p>";
					}
				}
			}
		?>
	</div>
	 
	<?php require 'footer.php'; ?>
	
</body>
</html>