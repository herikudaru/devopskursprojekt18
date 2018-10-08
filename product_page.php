<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML testpage</title>
	
	<meta name="description" content="testpage">

	<link rel="stylesheet" href="css/styles.css">
</head>

<body>

	<div class="col-12" id="topbar">
		<div class="col-10"><h4>Shoe shop</h4></div>
		<div class="col-2">
			<button>Cart</button>
			<button>Login</button>
		</div>
	</div>
	
	<div class="col-12">
		<?php 
			echo "<h2>Product name</h2></br>";
			echo "<h4>Brand</h4></br>";
		?>
	</div>
	
	<div class="col-12">
		<div class="col-6">
			<?php
				echo "<p>Product description.</p>";
			?>
		</div>
		
		<div class="col-6">
			<?php
				echo "<a href='https://placeholder.com'><img src='https://via.placeholder.com/350x150'></a>";
			?>
		</div>
	</div>
	
	<div class="col-12">
		<div class="col-6">
			<?php
				echo "<p>[Product price]</p>";
			?>
		</div>
		<div class="col-6">
			<?php
				echo "<p>Availability.</p>";
			?>
		</div>
	</div>
	
</body>
</html>