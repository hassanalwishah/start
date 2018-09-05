<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Compelte a item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p>These are all the available items for the user currently</p>
<?php 
$username= $_SESSION['username'];
$query ="SELECT description,datestarted,completed from todo where user='$username'";
$q=mysqli_query($db,$query);
echo "<table border='1'>
<tr>
<th>description</th>
<th>date completed</th>
<th> Completed</th>
</tr>
";
while ($row=mysqli_fetch_array($q)) {
	echo "<tr>";
	echo "<td>".$row['description']."</td>";
	echo "<td>".$row['datestarted']."</td>";
	echo "<td>".$row['completed']."</td>";
echo"</tr>";
}
echo "</table>";
?>
<br>
<p>To mark the item as complete please type in the description (case sensitive)</p>
<form method="post" action="complete.php">
	<textarea name = "complete" row="10" cols="30"></textarea>
	<button type="submit" name="completeitem"> Submit!</button>



</form>
<br>
<br>

<a href="index.php">Back to home page.</a>
</body>
</html>