<?php
	$str = file_get_contents("https://arcada-18-api.herokuapp.com/api/products");
	$jsonCart = json_decode($str, true);
	//$jsonCart = null;
?>

<div class="col-12" id="topbar">
	<div class="col-10">
		<a href="index.php"><h4>Shoe shop</h4></a>
	</div>
	<div class="col-2">
			<div class="dropdown">
				<button class="dropbtn">Cart</button>
					<div class="dropdown-content" style="width:200%">
						<?php
							$totalAmount = 0;
							if (!$jsonCart == null){
								for($i = 0;$i<count($jsonCart);$i++){
									echo "<td><div class='col-9'>";
									echo "<a href='product_page.php?productid=" . $jsonCart[$i]['id'] . "'>" . $jsonCart[$i]['name'] . "</a></div>";
									echo "<div class='col-1'><button class=btntopbar name='remove_obj".$jsonCart[$i]['id']."'><i class='far fa-trash-alt'></i></button></div></td>";//missing remove function
									echo "<div class='col-2'><p></p></div>";
						
						
									$totalAmount = $totalAmount + $jsonCart[$i]['price'];
								}
							}else {echo"<td>Shopping cart</br>is empty!</td></br>";}

							echo "<td>TOTAL: ".$totalAmount."e</td></br>";
						?>
						
						<input type=button class=btntopbar onClick="location.href='shopping_cart.php'" value="To Cart"><button class=btntopbar name="remove_all">Remove all</button></br><!-- missing function -->
						<button class=btntopbar >CHECKOUT</button></br><!-- missing function -->
						<?php 
							//remove_all and checkout functions here
						?>
					</div>
			</div>
		
		
			<div class="dropdown">
				<button class="dropbtn">Login</button>
					<div class="dropdown-content" style="width:200%;right:0%">
							<td><button class=btntopbar style="width:100%"><i class="fas fa-sign"></i>&ensp;Register</button></td></br>
							<td><button class=btntopbar style="width:100%"><i class="fas fa-sign-in-alt"></i>Login</button></td></br>
					</div>
			</div>
		
</div>