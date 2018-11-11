<?php

	session_start();
	
	function isJson($string) 
	{
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}
	
	function user_login($email, $password)
	{
		$data = array("email" => $email, "password" => $password);
		$data_string = json_encode($data);
		
		$ch = curl_init();
		
		$ch = curl_init('https://webshop-userdb-api.herokuapp.com/Users/login');                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
			'Content-Type: application/json',                                                                                
			'Content-Length: ' . strlen($data_string))                                                                       
		);
		
		$result = curl_exec($ch);
		$login_json_response = json_decode($result, true);
		if (isset($login_json_response['x_auth_token']))
		{
			$_SESSION['x-auth-token'] = $login_json_response['x_auth_token'];
			get_user_info();
			header("Refresh:0; url=account.php");
		}
		else if (isset($login_json_response['message']))
		{
			echo $login_json_response['message'];
		}
		else
		{
			echo "<script type='text/javascript'>alert('Something went wrong.');</script>";
		}
	}
	
	function get_user_info()
	{
		$curl_h = curl_init('https://webshop-userdb-api.herokuapp.com/Users/user');

		curl_setopt($curl_h, CURLOPT_HTTPHEADER,
			array(
				'authtoken: ' . $_SESSION['x-auth-token'],
			)
		);
		curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($curl_h);
		$user_info_json = json_decode($response, true);
		$_SESSION['user_info'] = $user_info_json;
	}
	
	function user_logout()
	{
		unset($_SESSION['x-auth-token']);
		unset($_SESSION['user_info']);
		header("Refresh:0");
	}
	function checkout_cart()
	{	$str = file_get_contents("https://productsdb-devops-arcada-2018.herokuapp.com/api/products");
		$json = json_decode($str, true);
		$totalAmount = 0;
		
		if (!isset($_SESSION['orders'])){
		$_SESSION['orders'] = array();
		$_SESSION['ordernumber'] = 0;}
		$used_ids = array();
		$new_order = array();
		if (!empty($_SESSION['shopping_cart'])){
					for ($j = 0;$j<sizeof($_SESSION['shopping_cart']);$j++){
								for ($i = 0;$i<sizeof($json);$i++){
									if($json[$i]['id'] === $_SESSION['shopping_cart'][$j]){
										$totalAmount = $totalAmount + $json[$i]['price'];
										
									}
								}
					}
					for ($k = 0; $k<sizeof($_SESSION['orders'] );$k++){
						array_push($used_ids,$_SESSION['orders'][$k][2]);
						if ($_SESSION['ordernumber'] == $_SESSION['orders'] [$k][2]){
							for ($l = 0; $l<sizeof($used_ids);$l++){
								$_SESSION['ordernumber'] = $used_ids[$l]+1;
								}
						}
					}
					
					$new_order = array($_SESSION['shopping_cart'],$totalAmount,$_SESSION['ordernumber']);
					array_push($_SESSION['orders'] ,$new_order);
					echo $_SESSION['ordernumber'];
		}

		unset($_SESSION['shopping_cart']);
		$_SESSION['shopping_cart'] = array();
		header("Location:orders.php");
	}
?>