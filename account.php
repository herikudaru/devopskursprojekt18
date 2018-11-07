<?php
	require 'functions.php';
?>
<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
	
	<?php
		$curl_h = curl_init('https://webshop-userdb-api.herokuapp.com/Users/user');

		curl_setopt($curl_h, CURLOPT_HTTPHEADER,
			array(
				'authtoken: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6IjQ0IiwibmJmIjoxNTQxNjEzNjMyLCJleHAiOjE1NDIyMTg0MzIsImlhdCI6MTU0MTYxMzYzMn0.LPe2dmTB8YdVI01ivNsOiYEn4BzLdKGq5hVpDb9GjxY',
			)
		);

		# do not output, but store to variable
		curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);

		$response = curl_exec($curl_h);
		
		var_dump($response);
	?>
	
</body>
</html>