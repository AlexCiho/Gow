
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
			<button class="btn" type="submit" name="Login" style="background: #556B2F;" >Login</button>
			<button class="btn" type="submit" name="Sign in" >Sign in</button>
	</div>
</form>
</body>
</html>