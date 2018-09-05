<?php include('server.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<h1>Welcome!  Register below</h1>
<div class="login">
<form method="post" action="home.php">
	<?php include('errors.php'); ?>

	First Name:
	<input type="text" name="fname" value="<?php echo $fname;?>">
	<br>
	<br>
Last Name:
<input type="text" name="lname"value="<?php echo $fname;?>">
<br>
<br>
Username:
<input type="text" name="user"value="<?php echo $fname;?>">
<br>
<br>
Password:
<input type="Password" name="pass"value="<?php echo $fname;?>">
<br>
<br>
Email:
<input type="email" name="email"value="<?php echo $fname;?>">
<br>
<br>
Date of Birth
<input type="Date" name="dob" value="<?php echo $fname;?>">
<br>
<br>
<button type="submit" name="register" value="register" class=btn> Register!
</button>
</form>
</div>

<br>
<br>
Already Register?
Log in here 
<a href="login.php" class= "log">Login</a>
</body>
</html>