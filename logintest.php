<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$userid=$_POST['userid'];
$ifsccode=$_SESSION['ifsccode'];
$password=$_POST['password'];
$sq="insert into user(ifsccode,password,userid)values('$ifsccode','$password','$userid')";
$result=$conn->query($sq);

echo $sq;
header("Location:project.php");	
	session_destroy();

}
?>

