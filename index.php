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
		<div class="dropdown">
			<button class="dropbtn">Gender</button>
			<div class="dropdown-content">
				<input type="radio" name="gender" value="all" checked="checked">All</br>
				<input type="radio" name="gender" value="female">Female</br>
				<input type="radio" name="gender" value="male">Male</br>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Size</button>
			<div class="dropdown-content">
				<input type="radio" name="size" value="0">all</br>
				<input type="radio" name="size" value="1">1</br>
				<input type="radio" name="size" value="2">2</br>
				<input type="radio" name="size" value="3">3</br>
				<input type="radio" name="size" value="4">4</br>
				<input type="radio" name="size" value="5">5</br>
				<input type="radio" name="size" value="6">6</br>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Price</button>
			<div class="dropdown-content">
				<input type="text" name="price-beginning" value="0">
				<input type="text" name="price-ending" value="1000">
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Color</button>
			<div class="dropdown-content">
				<input type="radio" name="color" value="all" checked="checked">All</br>
				<input type="radio" name="color" value="red">Red</br>
				<input type="radio" name="color" value="green">Green</br>
				<input type="radio" name="color" value="blue">Blue</br>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Stores</button>
			<div class="dropdown-content">
				<input type="radio" name="stores" value="all" checked="checked">All</br>
				<input type="radio" name="stores" value="x">X</br>
				<input type="radio" name="stores" value="y">Y</br>
				<input type="radio" name="stores" value="z">Z</br>
			</div>
		</div>
		<button>Filter</button>
		<input type="text" name="search" value="search">
		<button>Search</button>
	</div>
	
	<div class="col-12" id="product-list">
		<table>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Brand</th>
				<th>Price</th>
			</tr>
			<?php
				//populate the product list with php
				for($i = 0; $i < 10; $i++)
				{
					echo "<tr>";
					echo "<td><a href='product_page.php'><img src='https://via.placeholder.com/100x75'></a></td>";
					echo "<td>" . $json[0]['name'] . "</td>";
					echo "<td>" . $json[0]['brand'] . "</td>";
					echo "<td>" . $json[0]['price'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>