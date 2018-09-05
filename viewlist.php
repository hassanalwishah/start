<?php 
include ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>View List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p> Hear are the items avialable to view. </p>
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
<br>




<a href="index.php">Back to home page.</a>
</body>
</html>
