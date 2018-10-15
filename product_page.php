<?php
	$str = file_get_contents("./json/product.json");
	$json = json_decode($str, true);
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
			echo "<h2>" . $json[0]['name'] . "</h2></br>";
			echo "<h4>" . $json[0]['brand'] . "</h4></br>";
		?>
	</div>
	
	<div class="col-12">
		<div class="col-6">
			<?php
				echo "<p>" . $json[0]['description'] . "</p>";
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
				echo "<p>" . $json[0]['price'] . "€</p>";
			?>
		</div>
		<div class="col-6">
			<?php
				echo "<p>Availability: " . $json[0]['quantity'] . "</p>";
			?>
		</div>
	</div>
	
</body>
</html>