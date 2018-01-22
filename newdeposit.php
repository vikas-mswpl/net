<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$amount=(int)$_POST['amount'];
$v=$_SESSION['ifsccode'];
$sql="insert into request(ifsccode,amount,status)values('$v','$amount','null')";
$result=$conn->query($sql);
echo"Deposit request submitted";
}
