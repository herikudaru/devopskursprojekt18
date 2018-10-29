<?php
	$product_id = $_GET["productid"];
	$str = file_get_contents("https://arcada-18-api.herokuapp.com/api/product/" . $product_id);
	$json_obj = json_decode($str, true);
?>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML testpage</title>
	
	<meta name="description" content="testpage">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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
	
	<div class="col-6">
		<?php
			echo "<p>Description: " . $json_obj['description'] . "</p>";
			echo "<p>Sex: " . $json_obj['sex'] . "</p>";
			echo "<p>Size: " . $json_obj['size'] . "</p>";
			echo "<p>Color: " . $json_obj['color'] . "</p>";
			echo "<p>Price: " . $json_obj['price'] . "€</p>";
		?>
	</div>

	<div class="col-6">
		<?php
			echo "<a href='https://placeholder.com'><img src='https://via.placeholder.com/350x150'></a>";
		?>
	</div>
	
</body>
</html>