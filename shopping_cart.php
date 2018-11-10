<?php
require 'functions.php';
?>
<!doctype html>

<html lang="en">

<?php require 'head.php'; ?>

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
				
				if (!empty($_SESSION['shopping_cart'])){
					for ($j = 0;$j<sizeof($_SESSION['shopping_cart']);$j++){
								for ($i = 0;$i<sizeof($json);$i++){
									if($json[$i]['id'] === $_SESSION['shopping_cart'][$j]){
										echo "<tr>";
										echo "<td><a href='product_page.php?productid=" . $json[$i]['id'] . "'>" .$json[$i]['name'] . "</a></td>";
										echo "<td><div class='col-9'>" . $json[$i]['price'] . "</div>";
										echo "<div class='col-1'><form method='post'><button type='submit' name='remove_obj".$j."' class='btn'><i class='far fa-trash-alt'></i></button>";
										$removable_obj = "remove_obj".$j;
										if (isset($_POST[$removable_obj])){
											unset($_SESSION['shopping_cart'][$j]);
											$temp_array = array_values($_SESSION['shopping_cart']);
											$_SESSION['shopping_cart']=$temp_array;
											header("Refresh:0");
											break;
										}
										echo "</form></div></td>";
										echo "<div class='col-2'><p></p></div>";
										echo "</tr>";
										$totalAmount = $totalAmount + $json[$i]['price'];
									}
								}
					}
				}else {echo"<td>Shopping cart</td><td>is empty!</td></br>";}
				echo "<tr>";
				echo "<th>TOTAL:</th><th>".$totalAmount."e</th></tr>";
			?>
			<tr>
				<form method="post">
				<td><button type="submit" name="remove_all" class="btn" style="width:100%;height100%;"><i class="far fa-trash-alt"></i>Remove all</button></td>
				<td><button type="submit" name="checkout" class="btn" style="width:100%;height100%;"><i class="fas fa-arrow-alt-circle-right"></i>Checkout</button></td>
				<?php 
					if(isset($_POST['remove_all'])){
						unset($_SESSION['shopping_cart']);
						$_SESSION['shopping_cart'] = array();
						header("Refresh:0");
					}
					if(isset($_POST['checkout'])){
						
					}
				?>
				</form>
				
			</tr>

			
		</table>
		<tr><td><input style=width:100% type="button" class="btn" onClick="location.href='index.php'" name="back_store" value="Back to store"></td></tr>
	</div>
	<div class="col-5"><p></p></div>




</body>
</html>