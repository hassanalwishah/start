<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login!</title>
		<link type="text/css" rel="stylesheet" href="style.css">

</head>
<body>
Welcome Back! Login below!
<br>
<br>
<div class="login">
<form method="post" action='login.php'>
	Username:
	<input type="text" name="username" value="<?php echo $username ?>">
	<br>
	<br>
	Password:
	<input type="Password" name="password" value="<?php echo $username ?>">
	<br>
	<br>
	<button type="submit" name="login">Login!</button>
</form>
</div>
</body>
</html>