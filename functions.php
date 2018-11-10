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
?>