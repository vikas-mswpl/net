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
$v=$_SESSION['ifsccode'];
$sql="select accountno from account";
//$sql="insert into benificary(name,accountno,ifsccode)values('$name','$accountno','$v')"; 
$result = $conn->query($sql) or die($conn->error);
$c=0;
while($row = mysqli_fetch_array($result)){
if ($row['accountno']==$accountno)
{
$confirm="select accountno from benificary where ifsccode='$v'";
$resul=$conn->query($confirm)or die($conn->error);
while($r = mysqli_fetch_array($resul)){
if ($r['accountno']==$accountno){
echo"Benificiary already added";
$c=2;
break;
}}
if($c==2)
{break;}
else{
$sq="insert into benificary(name,accountno,ifsccode)values('$name','$accountno','$v')"; 	
$resul=$conn->query($sq);
$c=1;
echo"Benificiary added successfully";
break;}
}
}
if ($c==0)
{
	//$row['accountno']==$_SESSION['accountno']
	echo"invalid account no"; 
}
}