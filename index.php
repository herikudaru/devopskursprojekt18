<?php
	require 'functions.php';
?>

<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<?php require 'filterbar.php'; ?>
	
	<div class="col-12" id="product-list">
		<table>
			<tr>
				<th>Name</th>
				<th>Brand</th>
				<th>Price</th>
				<th>Color</th>
				<th>Sex</th>
				<th>Size</th>
			</tr>
			<?php
				for($i = 0; $i < count($json); $i++)
				{	if(isset($_POST['filter'])){
						if(($json[$i]['gender']===$_POST['gender'] || $_POST['gender'] === "all")
							&& ($json[$i]['brand']===$_POST['brand'] || $_POST['brand'] === "all")
							&& ($json[$i]['color']===$_POST['color'] || $_POST['color'] === "all")
							&& ($json[$i]['size']>=$_POST['size-beginning'] || $json['size']<=$_POST['size-ending'])
							&& ($json[$i]['price']>=$_POST['price-beginning'] || $json['price']<=$_POST['price-ending'])){
							echo "<tr>";
							echo "<td><a href='product_page.php?productid=" . $json[$i]['id'] . "'>" . $json[$i]['name'] . "</a></td>";
							echo "<td>" . $json[$i]['brand'] . "</td>";
							echo "<td>" . $json[$i]['price'] . "</td>";
							echo "<td>" . $json[$i]['color'] . "</td>";
							echo "<td>" . $json[$i]['gender'] . "</td>";
							echo "<td>" . $json[$i]['size'] . "</td>";
							echo "</tr>";
						}
					}
					else
					{
						echo "<tr>";
							echo "<td><a href='product_page.php?productid=" . $json[$i]['id'] . "'>" . $json[$i]['name'] . "</a></td>";
							echo "<td>" . $json[$i]['brand'] . "</td>";
							echo "<td>" . $json[$i]['price'] . "</td>";
							echo "<td>" . $json[$i]['color'] . "</td>";
							echo "<td>" . $json[$i]['gender'] . "</td>";
							echo "<td>" . $json[$i]['size'] . "</td>";
							echo "</tr>";
					}
				}
			?>
		</table>
	</div>
	
	<?php 
		require "footer.php";
	?>
	
</body>
</html>