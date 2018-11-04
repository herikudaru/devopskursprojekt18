<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>HTML testpage</title>
	
	<meta name="description" content="testpage">

	<link rel="stylesheet" href="css/styles.css">    
	
	<link rel="shortcut icon" href="#" />
	
</head>


<body>

	<?php require 'topbar.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<form id="register_form" action="https://webshop-userdb-api.herokuapp.com/Users/register" method="post">
  <input type="text" placeholder="Name" name="name" title="Up to 20 alphabetical characters">
  <br>
  <input type="email" placeholder="Email" name="email" title="Must be a valid email address">
  <br>
  <input type="password" placeholder="Password" name="password" title="Must be 8 or more characters long and contain at least one number and one uppercase letter">
  <br>
  <input type="text" placeholder="Homeadress" name="homeadress">
  <br>
  <input type="text" placeholder="Postnumber" name="postnumber">
  <br>
  <input type="text" placeholder="City" name="city">
  <br>
  <button value="Submit" type="submit">Register</button>
</form>

<script>

const serialize_form = form => JSON.stringify(
  Array.from(new FormData(form).entries())
       .reduce((m, [ key, value ]) => Object.assign(m, { [key]: value }), {})
);

$('#register_form').on('submit', function(event) {
  event.preventDefault();
  const json = serialize_form(this);
   console.log(json);
 
 $.ajax({
    type: 'POST',
    url: 'https://webshop-userdb-api.herokuapp.com/Users/register',
    dataType: 'json',
    data: json,
    contentType: 'application/json',
    success: function(data) {
      alert(data)
    }
  });
});

</script>

</body>
</html>