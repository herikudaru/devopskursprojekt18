<?php
	$product_id = $_GET["productid"];
	$product_str = file_get_contents("https://arcada-18-api.herokuapp.com/api/product/" . $product_id);
	$product_json_obj = json_decode($product_str, true);
	$stores_str = file_get_contents("https://arcada-18-api.herokuapp.com/api/stores");
	$stores_json_obj = json_decode($stores_str, true);
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML testpage</title>
	
	<meta name="description" content="testpage">

	<link rel="stylesheet" href="css/styles.css">
</head>

<body>

	<?php require 'topbar.php'; ?>
	
	<div class="col-12">
		<?php 
			echo "<h2>" . $product_json_obj['name'] . "</h2></br>";
			echo "<h4>" . $product_json_obj['brand'] . "</h4></br>";
		?>
	</div>
	
	<div class="col-6">
		<?php
			echo "<p>Description: " . $product_json_obj['description'] . "</p>";
			echo "<p>Sex: " . $product_json_obj['sex'] . "</p>";
			echo "<p>Size: " . $product_json_obj['size'] . "</p>";
			echo "<p>Color: " . $product_json_obj['color'] . "</p>";
			echo "<p>Price: " . $product_json_obj['price'] . "€</p>";
		?>
	</div>

	<div class="col-6">
		<?php
			echo "<h4>Availability:</h4>";
			for($i = 0; $i < count($stores_json_obj); $i++)
			{
				$inventory_str = file_get_contents("https://arcada-18-api.herokuapp.com/api/inventories/" . $stores_json_obj[$i]['storeId']);
				$inventory_json_obj = json_decode($inventory_str, true);
				echo "<p>" . $stores_json_obj[$i]['storeName'] . ": ";
				for($j = 0; $j < count($inventory_json_obj); $j++)
				{
					if((string)$inventory_json_obj[$j]['prodId'] === $product_id)
					{
						echo $inventory_json_obj[$j]['qty'] . "</p>";
					}
				}
			}
		?>
	</div>
	
</body>
</html>