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
		<div class="col-9"><p></p></div>
		<div class="col-3">
			<button>Cart</button>
			<button>Login</button>
		</div>
	</div>
	<div class="col-12">
		<div class="dropdown">
			<button class="dropbtn">Gender</button>
			<div class="dropdown-content">
				<input type="radio" name="gender" value="all" checked="checked">All</br>
				<input type="radio" name="gender" value="female">Female</br>
				<input type="radio" name="gender" value="male">Male</br>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Size</button>
			<div class="dropdown-content">
				<input type="radio" name="size" value="1">1
				<input type="radio" name="size" value="2">2
				<input type="radio" name="size" value="3">3
				<input type="radio" name="size" value="4">4
				<input type="radio" name="size" value="5">5
				<input type="radio" name="size" value="6">6
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Price</button>
			<div class="dropdown-content">
				<input type="text" name="price_beginning" value="0">
				<input type="text" name="price_ending" value="1000">
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Color</button>
			<div class="dropdown-content">
				<input type="radio" name="color" value="all" checked="checked">All</br>
				<input type="radio" name="color" value="red">Red</br>
				<input type="radio" name="color" value="green">Green</br>
				<input type="radio" name="color" value="blue">Blue</br>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Stores</button>
			<div class="dropdown-content">
				<input type="radio" name="stores" value="all" checked="checked">All</br>
				<input type="radio" name="stores" value="x">X</br>
				<input type="radio" name="stores" value="y">Y</br>
				<input type="radio" name="stores" value="z">Z</br>
			</div>
		</div>
		<button>Filter</button>
	</div>
	
</body>
</html>