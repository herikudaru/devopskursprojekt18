<?php
	require 'functions.php';
	$str = file_get_contents("https://arcada-18-api.herokuapp.com/api/products");
	$json = json_decode($str, true);
?>

<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

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
				<th>Name</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Color</th>
				<th>Gender</th>
			</tr>
			<?php
				//populate the product list with php
				for($i = 0; $i < count($json); $i++)
				{
					echo "<tr>";
					echo "<td><a href='product_page.php?productid=" . $json[$i]['id'] . "'>" . $json[$i]['name'] . "</a></td>";
					echo "<td>" . $json[$i]['brand'] . "</td>";
					echo "<td>" . $json[$i]['price'] . "</td>";
					echo "<td>" . $json[$i]['color'] . "</td>";
					echo "<td>" . $json[$i]['sex'] . "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
	
</body>
</html>