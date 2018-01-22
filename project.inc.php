<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$name=$_POST['name'];
$contact=$_POST['contact'];
$DOB=$_POST['DOB'];
$cifno=$_POST['CIF_No'];
$panno=$_POST['PAN_No'];
$branchid=$_POST['Branch_id'];
$Email=$_POST['Email'];
$ifsccode=$_POST['IFSC_code'];
$_SESSION['ifsccode']=$ifsccode;
$sq="insert into account(name,contact,dob,cifno,panno,branchid,Email,ifsccode)values('$name','$contact','$DOB','$cifno','$panno','$branchid','$Email','$ifsccode')";
$result=$conn->query($sq);
if($result)
{header("Location:register2.php");}
else{
	echo"duplicate entries entered";
	echo'<a href="home.php">Home</a>';
	}	
}
?>




