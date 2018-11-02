<?php
	$str = file_get_contents("https://arcada-18-api.herokuapp.com/api/products");
	$json = json_decode($str, true);
	session_start();
	if(isset($_SESSION['shopping_cart'])){
	
	}else {
		$_SESSION['shopping_cart'] = array();
	}
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
							if (!empty($_SESSION['shopping_cart'])){
							for ($j = 0;$j<count($_SESSION['shopping_cart']);$j++){
								for ($i = 0;$i<count($json);$i++){
									if($json[$i]['id'] === $_SESSION['shopping_cart'][$j]){
									echo "<td><div class='col-9'>";
									echo "<a href='product_page.php?productid=" . $json[$i]['id'] . "'>" . $json[$i]['name'] . "</a></div>";
									echo "</td>";
									}
								}
							}
							}else {echo"<td>Shopping cart</br>is empty!</td></br>";}

							echo "<td>TOTAL: ".$totalAmount."e</td></br>";
						?>
						
						<div class="col-6"><input  style="width:100%" type=button class=btntopbar onClick="location.href='shopping_cart.php'" value="To Cart"></div><form method="post"><div class="col-6"><button type="submit" style="width:100%" class=btntopbar name="remove_all">Remove all</button></div></br><!-- missing function -->
						<button type="submit" name="checkout" class=btntopbar style="width:100%">CHECKOUT</button></br>
						<?php 
							if(isset($_POST['remove_all'])){
								unset($_SESSION['shopping_cart']);
								$_SESSION['shopping_cart'] = array();
								header("Refresh:0");
							}
							if(isset($_POST['checkout'])){
								$_SESSION['new_order'] = $_SESSION['shopping_cart'];
								header("location:orders.php");
							}
						?>
						</form>
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
</div>