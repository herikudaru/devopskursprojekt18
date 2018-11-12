<div class="col-12">
	<form action="index.php" method="post">
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
				<input type="text" name="size-beginning" value="0">
				<input type="text" name="size-ending" value="100">
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Price</button>
			<div class="dropdown-content">
				<input type="text" name="price-beginning" value="0">
				<input type="text" name="price-ending" value="1000">
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
		<input type="submit" value="Filter" name="filter">
	</form>
</div>