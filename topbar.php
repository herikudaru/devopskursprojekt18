<div class="col-12" id="topbar">
	<div class="col-8">
		<a href="index.php"><h4>Shoe shop</h4></a>
	</div>
	<div class="col-2">
		<?php 
			if (isset($_SESSION['user_info']))
			{
				echo "<h5>Hello " . $_SESSION['user_info']['name'] . ".";
			}
			else
			{
				echo "Welcome.";
			}
		?>
	</div>
	<div class="col-2">
		<button>Cart</button>
		<?php 
			if (isset($_SESSION['user_info']))
			{
				echo "<form method='post' action='#'><input type='submit' value='Logout' name='logout'></form>";
				echo "<a href='account.php'><button>Account</button></a>";
			}
			else
			{
				echo "<a href='login.php'><button>Login</button></a>";
				echo "<a href='register.php'><button>Register</button></a>";
			}
			if (isset($_POST['logout']))
			{
				user_logout();
			}
		?>
	</div>
</div>