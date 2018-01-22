<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	include 'pheader.php';
$name=$_POST['name'];
$accountno=$_POST['accountno'];
$sql="insert into benificary(name,accountno)values('$name','$accountno')"; 
$result=$conn->query($sql);
if(!$row=$result->fetch_assoc())
{
echo "your password or username incorrect";
}
else{
	$_SESSION['ifsccode']=$row['ifsccode'];
header("Location: home.php");
}
}


