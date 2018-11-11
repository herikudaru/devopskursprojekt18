<?php
	$contact_str = file_get_contents("https://devopstoresapp.herokuapp.com/api/stores");
	$contact_json_obj = json_decode($contact_str, true);
?>
<div class="col-12" id="footer">
	<table>
		<?php
			
			echo "<tr>";
			echo "<td colspan='4'>Stores: </td>";
			echo "</tr>";
			echo "<tr>";
			
			for($i = 0; $i < count($contact_json_obj); $i++)
			{
				echo "<td>" . $contact_json_obj[$i]['storeName'] . " " . $contact_json_obj[$i]['zipCode'] . "</td>";
			}
			
			echo "</tr>";
			echo "<tr>";
			
			for($i = 0; $i < count($contact_json_obj); $i++)
			{
				echo "<td>" . $contact_json_obj[$i]['address'] . "</td>";
			}
			
			echo "</tr>";
			echo "<tr>";
			
			for($i = 0; $i < count($contact_json_obj); $i++)
			{
				echo "<td>Tel. " . $contact_json_obj[$i]['phoneNo'] . "</td>";
			}
			
			echo "</tr>";
		?>
	</table>
</div>