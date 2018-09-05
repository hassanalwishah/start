<?php
session_start();
$db=mysqli_connect('localhost','root','hassan12345','todolist');
$fname="";
$lname="";
$username="";
$email="";
$errors = array(); 
if (isset($_POST['register'])) {
	$fname= mysqli_real_escape_string($db,$_POST['fname']);
	$lname= mysqli_real_escape_string($db,$_POST['lname']);
	$username= mysqli_real_escape_string($db,$_POST['user']);
	$_SESSION['hassan']=$fname;
	$password= mysqli_real_escape_string($db,$_POST['pass']);
	$email= mysqli_real_escape_string($db,$_POST['email']);
	$dob=mysqli_real_escape_string($db,$_POST['dob']);

if(empty($username))
	{
		array_push($errors, "Username is empty");
	}
if(empty($email))
	{array_push($errors, "Email is empty");}
if(empty($password))
	{array_push($errors, "Password is empty");}
if (userexists($username)==true) {
	array_push($errors, "Username exists");
}
if (count($errors)==0) {
	$password_1=md5($password);
	$query="INSERT into person(fname,lname,username,password,email,dob) VALUES('$fname','$lname','$username','$password_1','$email','$dob')";
	$success=mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['success']="You're now logged in";
	header('location:index.php');
}
}
function userexists($user)
{
	$db=mysqli_connect('localhost','root','hassan12345','todolist');
	$username=$user;
$user_check="SELECT * from person where username ='$username' LIMIT 1";
$result=mysqli_query($db,$user_check);
$user= mysqli_fetch_assoc($result);
if ($user['username']===$username) {
return true;

}
return false;
}
if (isset($_POST['login'])) {
	$username= mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
$password_1=md5($password);

$logincheck="SELECT * from person where username ='$username'and password='$password_1'";
$query=mysqli_query($db,$logincheck);
  if (mysqli_num_rows($query)==1) {
  	header('location:index.php');
 	$_SESSION['username']=$username;

}
  }
  if (isset($_POST['create'])) {
  	$message=mysqli_real_escape_string($db,$_POST['message']);
  	$_SESSION['message']=$message;
  	$date=mysqli_real_escape_string($db,$_POST['date']);
$_SESSION['date']=$date;
$username=$_SESSION['username'];
$query="INSERT INTO todo (user, description, datestarted, completed) VALUES('$username','$message','$date','0')";
$todo=mysqli_query($db,$query);
header('location: index.php');
  }
if (isset($_POST['completeitem'])) {
	$message = mysqli_real_escape_string($db,$_POST['complete']);
	$query="UPDATE todo set completed ='1' where description='$message'";
	$com=mysqli_query($db,$query);
	header('location:viewlist.php');
}
if (isset($_POST['removeitem'])) {
	$remove=mysqli_real_escape_string($db,$_POST['remove']);
	$query="DELETE FROM todo WHERE description='$remove'";
	$complete=mysqli_query($db,$query);
	header('location: viewlist.php');
}
  ?>