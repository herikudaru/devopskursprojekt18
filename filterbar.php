<div class="col-12">
	<div class="dropdown">
		<button class="dropbtn">Gender</button>
		<div class="dropdown-content">
			<input type="radio" name="sex" value="all" checked="checked">All</br>
			<input type="radio" name="sex" value="female">Female</br>
			<input type="radio" name="sex" value="male">Male</br>
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
			<?php
				for($i = 0; $i < count($json); $i++)
				{
					if(array_search($json[$i]['color'], $colors) === false)
					{
						array_push($colors, $json[$i]['color']);
					}
				}
				for($i = 0; $i < count($colors); $i++)
				{
					echo "<input type='radio' name='color' value='" . $colors[$i] . "'>" . $colors[$i] . "</br>";
				}
			?>
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
	<input type="text" name="search" value="" placeholder="Search by name..">
	<button>Filter</button>
</div>