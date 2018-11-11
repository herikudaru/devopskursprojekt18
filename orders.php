<?php
	require 'functions.php';
?>
<!doctype html>

<html lang="en">

	<?php require 'head.php'; ?>

<body>

	<?php require 'topbar.php'; ?>
		<div class="col-4"><p></p></div>
		<div class="col-4">
			<table>
		
				
				<?php
				if (isset($_SESSION['user_info']))
							{
								if (!empty($_SESSION['orders']))
								{
									echo "<tr>
											<th>Order#</th>
											<th>Total</th>
										 </tr>";
									for($i = 0;$i<sizeof($_SESSION['orders']);$i++){
										echo "<tr><td><a href='order.php?ordernumber=" . $_SESSION['orders'][$i][2] . "'>".$_SESSION['orders'][$i][2]."</td>";
										echo "<td>".$_SESSION['orders'][$i][1]."e</td></tr>";
									}
									
								}else{echo	"<td>You have no orders</td>";}
							}
							else{echo	"<td>You are not logged in</td>";}
							
							if (isset($_POST['logout']))
							{
								user_logout();
							}
				?>
			</table>
		</div>
		<div class="col-4"><p></p></div>
		</div>
</body>
</html>