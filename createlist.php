<?php include('server.php');
echo $_SESSION['message'];
echo $_SESSION['date'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create a list</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p>To create a to do list. Please give a breif description of the what is being accomplished?</p>
<form method="post" action="createlist.php">
What would you like to do?
<br>
<textarea name="message" rows="10" cols="30"></textarea>
<br>
When are you starting this?
<input type="date" name="date">
<br>
<button type="submit" name="create">Create List</button>

</form>


<a href="index.php">Back to home page.</a>

</body>
</html>
