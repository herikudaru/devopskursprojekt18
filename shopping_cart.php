
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
	<div class="col-4"><p></p></div>
	<div class="col-3" id="cart">
		<table>
		
			<tr>
				<th>Name</th>
				<th>Price</th>
			</tr>
			<?php
				$totalAmount = 0;
				if (!$jsonCart == null){
					for($i = 0; $i < count($jsonCart); $i++)
					{
						echo "<tr>";
						echo "<td><a href='product_page.php?productid=" . $jsonCart[$i]['id'] . "'>" . $jsonCart[$i]['name'] . "</a></td>";
						echo "<td><div class='col-9'>" . $jsonCart[$i]['price'] . "</div>";
						echo "<div class='col-1'><button name='removeobj".$jsonCart[$i]['id']."' class='btn'><i class='far fa-trash-alt'></i></button></div></td>";//missing remove function
						echo "<div class='col-2'><p></p></div>";
						echo "</tr>";
						$totalAmount = $totalAmount + $jsonCart[$i]['price'];
					}
				}else {echo"<td>Shopping cart</td><td>is empty!</td></br>";}
				echo "<tr>";
				echo "<th>TOTAL:</th><th>".$totalAmount."e</th></tr>";
			?>
			<tr>
				<td><button name="remove_all" class="btn" style="width:100%;height100%;"><i class="far fa-trash-alt"></i>REMOVE ALL</button></td><!-- missing function -->
				<td><button name="checkout" class="btn" style="width:100%;height100%;"><i class="fas fa-arrow-alt-circle-right"></i>CHECKOUT</button></td><!-- missing function -->
				<?php 
							//remove_all and checkout functions here
				?>
			</tr>

			
		</table>
		<tr><td><input style=width:100% type="button" class="btn" onClick="location.href='index.php'" name="back_store" value="Back to store"></td></tr>
	</div>
	<div class="col-5"><p></p></div>




</body>
</html>