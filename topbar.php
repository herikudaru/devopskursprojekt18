<?php
	$str = file_get_contents("https://arcada-18-api.herokuapp.com/api/products");
	$json_obj = json_decode($str, true);
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
							$_SESSION['shopping_cart'] = array(3,2);
							$totalAmount = 0;
							if (!empty($_SESSION['shopping_cart'])){
							for ($j = 0;$j<count($_SESSION['shopping_cart']);$j++){
								for ($i = 0;$i<count($json_obj);$i++){
									if($json_obj[$i]['id'] === $_SESSION['shopping_cart'][$j]){
									echo "<td><div class='col-9'>";
									echo "<a href='product_page.php?productid=" . $json_obj[$i]['id'] . "'>" . $json_obj[$i]['name'] . "</a></div>";
									echo "<div class='col-1'><button class=btntopbar name='remove_obj".$j."'><i class='far fa-trash-alt'></i></button></div></td>";//missing remove function
									echo "<div class='col-2'><p></p></div>";
									}
								}
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
</div>