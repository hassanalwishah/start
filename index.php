<?php include ('server.php');
$username= $_SESSION['username'];
	echo $_SESSION['username'];
	 if (isset($_GET['logout'])) {
	 	session_destroy();
	 	unset($_SESSION['username']);
	 	header('location: home.php');
	 }
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<p>Welcome <?php echo $username ?></p>
What would you like to do?
<div class="show">
<form method="post" action="index.php">
<a href="createlist.php">Create a new to do item</a>
<a href="viewlist.php">View to do items</a>
<a href="complete.php">Complete a to do item</a>
<a href="remove.php">Remove a to do item</a>

</div>
</form>
<br>
<a href="index.php?logout='1'" style="color: red;">Logout!</a>
</body>
</html>
