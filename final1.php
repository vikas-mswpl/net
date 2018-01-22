<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
	echo'<link rel="stylesheet" type="text/css" href="style.css">';

echo "<form action='final2.php' method='POST'>
IFSC CODE:
<input type='text' name='ifsccode' required='required'>
Status:
<select name='status'>
<option value='1'>Block</option><option value='0'>Unblock</option></select>
<input type='submit' value='submit'></td>";
}