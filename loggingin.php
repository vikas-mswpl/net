<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	$s=2;
	session_start();
	include 'pheader.php';
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="select status from user where userid='$userid' and password='$password'"; 
$result=$conn->query($sql);
while($row = mysqli_fetch_array($result))
{
$s=$row['status'];}
$sql="select * from user where userid='$userid' and password='$password' and status='0'"; 
$result=$conn->query($sql);
if($s==1){
echo "Account blocked";	
}
else if(!$row=$result->fetch_assoc())
{
echo "your password or username incorrect";
}
else{
	$_SESSION['ifsccode']=$row['ifsccode'];
header("Location: home.php");
}
}


