<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
	echo'<link rel="stylesheet" type="text/css" href="style.css">';
$v=$_SESSION['ifsccode'];
$t=$_POST['status'];
$a=$_SESSION["amount"];
echo"$v";
echo"$t";
echo"$a";
$sql="update request set status='$t' where ifsccode='$v'"; 	
$result=$conn->query($sql)or die($conn->error);
if($t=='yes'){
$balance="select balance from account where ifsccode='$v'";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$f=(int)$bi['balance'];
$f+=$a;
$f=(string)$f;
$c=0;
$sq="update account set balance='$f' where ifsccode='$v'"; 	
$resul=$conn->query($sq)or die($conn->error);
echo"Deposit successfull";
header("Location: adminhome.php");
}
header("Location: adminhome.php");
}