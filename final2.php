<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
	echo'<link rel="stylesheet" type="text/css" href="style.css">';
$v=$_POST['ifsccode'];
$t=$_POST['status'];
echo"$v";
echo"$t";
$sql="update user set status='$t' where ifsccode='$v'"; 	
$result=$conn->query($sql)or die($conn->error);
header("Location: adminhome.php");
}