<?php
		$str = file_get_contents("https://productsdb-devops-arcada-2018.herokuapp.com/api/products");
		$json = json_decode($str, true);
		$totalAmount = 0;
		$orders = array(array(array(47,50,55),123,4),array(array(36,55,40),223,3),array(array(47,50,55),123,0),array(array(36,55,40),223,1));
		$order = array();
		$used_ids = array();
		$cart = array(36,38,40);
		//$cart = array(47,50,55);
		//$cart = array(36,55,40);
		$new_order_id = 0;
		//print_r($json)
		
		
		
		
		
		
		if (!empty($cart)){
					for ($j = 0;$j<sizeof($cart);$j++){
								for ($i = 0;$i<sizeof($json);$i++){
									if($json[$i]['id'] === $cart[$j]){
										$totalAmount = $totalAmount + $json[$i]['price'];
										
									}
								}
					}
					for ($k = 0; $k<sizeof($orders);$k++){
						array_push($used_ids,$orders[$k][2]);
						if ($new_order_id === $orders[$k][2]){
							for ($l = 0; $l<sizeof($used_ids);$l++){
								$new_order_id = $used_ids[$l]+1;
								}
						}
					}
					
					$order = array($cart,$totalAmount,$new_order_id);
					array_push($orders,$order);
					print_r($orders);
		}
		
		
?>

