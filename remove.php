<?php 
include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove a to do item.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p> Welcome! you are here to remove an item from the list. Below will be the list assignment to you. To remove an item please write in the description of the job you would like to remove.</p>
<form method="post" action="remove.php">
<textarea name ="remove" rows="10" cols="30"></textarea>
<button type="submit" name="removeitem">Submit</button>
</form>
<br>
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
</body>
</html>