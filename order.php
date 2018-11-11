<?php
require 'functions.php';
$order_number = $_GET["ordernumber"];
$this_order = $_SESSION['orders'][$order_number][0];
?>
<!doctype html>

<html lang="en">

<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	<div class="col-4"><p></p><?php echo $order_number;?></div>
	<div class="col-3" id="cart">
		<table>
		
			<tr>
				<th>Name</th>
				<th>Price</th>
			</tr>
			<?php
				$totalAmount = 0;
					
					
					for ($j = 0;$j<sizeof($this_order);$j++){
								for ($i = 0;$i<sizeof($json);$i++){
									if($json[$i]['id'] === $this_order[$j]){
										echo "<tr>";
										echo "<td><a href='product_page.php?productid=" . $json[$i]['id'] . "'>" .$json[$i]['name'] . "</a></td>";
										echo "<td><div class='col-9'>" . $json[$i]['price'] . "</div>";
										
										echo "</form></div></td>";
										echo "<div class='col-2'><p></p></div>";
										echo "</tr>";
										$totalAmount = $totalAmount + $json[$i]['price'];
									}
								}
					}
				
				echo "<tr>";
				echo "<th>TOTAL:</th><th>".$totalAmount."e</th></tr>";
			?>
			

			
		</table>
		<tr><td><input style=width:100% type="button" class="btn" onClick="location.href='orders.php'" name="back_store" value="Back"></td></tr>
	</div>
	<div class="col-5"><p></p></div>




</body>
</html>