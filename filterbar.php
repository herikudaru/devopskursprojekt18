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
			<button class="dropbtn">Brand</button>
			<div class="dropdown-content">
				<?php
					$brands = ["all"];
					for($i = 0; $i < count($json); $i++)
					{
						if (!in_array($json[$i]['brand'], $brands))
						{
							array_push($brands, $json[$i]['brand']);
						}
					}
					for ($i = 0; $i < count($brands); $i++)
					{
						if ($i === 0)
						{
							echo "<input type='radio' name='brand' value='" . $brands[$i] . "' checked='checked'>" . $brands[$i] . "</br>";
						}
						else
						{
							echo "<input type='radio' name='brand' value='" . $brands[$i] . "'>" . $brands[$i] . "</br>";
						}
					}
				?>
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
				<?php
					$colors = ["all"];
					for($i = 0; $i < count($json); $i++)
					{
						if (!in_array($json[$i]['color'], $colors))
						{
							array_push($colors, $json[$i]['color']);
						}
					}
					for ($i = 0; $i < count($brands); $i++)
					{
						if ($i === 0)
						{
							echo "<input type='radio' name='color' value='" . $colors[$i] . "' checked='checked'>" . $colors[$i] . "</br>";
						}
						else 
						{
							echo "<input type='radio' name='color' value='" . $colors[$i] . "'>" . $colors[$i] . "</br>";
						}
					}
				?>
			</div>
		</div>
		<input type="submit" value="Filter" name="filter">
	</form>
</div>