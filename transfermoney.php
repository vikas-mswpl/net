<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	include 'pheader.php';
$amount=(int)$_POST['amount'];
$accountno=$_POST['accountno'];
$v=$_SESSION['ifsccode'];
$sql="select accountno from benificary";
$balance="select balance from account where ifsccode='$v'";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$f=(int)$bi['balance'];
$t=$f-$amount;
$t=(string)$t;
$result = $conn->query($sql) or die($conn->error);
$c=0;
while($row = mysqli_fetch_array($result)){
if ($row['accountno']==$accountno)
{
if((int)$f-$amount>0){
$sq="update account set balance='$t' where ifsccode='$v'"; 	
$resul=$conn->query($sq)or die($conn->error);
$balance="select balance from account where accountno='$accountno'";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$g=(int)$bi['balance'];
$g+=$amount;
$g=(string)$g;
$s="update account set balance='$g' where accountno='$accountno'"; 	
$resu=$conn->query($s);
$c=1;
echo"Transfer successfull";
break;
}
else if((int)$f-$amount<=0)
{
	$c=2;
break;}
}
}
if ($c==0)
{
	//$row['accountno']==$_SESSION['accountno']
	echo"invalid account no"; 
}
else if($c==2)
	echo"Amount more than account balance";
}
