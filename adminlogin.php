<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	$ifsccode=$_POST['ifsccode'];
$password=$_POST['password'];
$sql="select * from admin where userid='$ifsccode' and password='$password'"; 
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc())
{
echo "your password or username incorrect";
}
else{
header("Location: adminhome.php");
}
}


