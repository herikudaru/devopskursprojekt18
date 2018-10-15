<?php
	$product_id = $_GET["productid"];
	$str = file_get_contents("./json/product.json");
	$json_arr = json_decode($str, true);
	$json_obj;
	
	for($i = 0; $i < count($json_arr); $i++)
	{
		if($json_arr[$i]['id'] == $product_id)
		{
			$json_obj = $json_arr[$i];
		}
	}
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
			echo "<h2>" . $json_obj['name'] . "</h2></br>";
			echo "<h4>" . $json_obj['brand'] . "</h4></br>";
		?>
	</div>
	
	<div class="col-12">
		<div class="col-6">
			<?php
				echo "<p>" . $json_obj['description'] . "</p>";
			?>
		</div>
		
		<div class="col-6">
			<?php
				echo "<a href='https://placeholder.com'><img src='https://via.placeholder.com/350x150'></a>";
			?>
		</div>
	</div>
	
	<div class="col-12">
		<div class="col-6">
			<?php
				echo "<p>" . $json_obj['price'] . "€</p>";
			?>
		</div>
		<div class="col-6">
			<?php
				echo "<p>Availability: " . $json_obj['quantity'] . "</p>";
			?>
		</div>
	</div>
	
</body>
</html>