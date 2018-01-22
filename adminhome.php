<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
		session_start();
	echo'<link rel="stylesheet" type="text/css" href="style1.css">';
$sql="select * from request where status='null'";
$result = $conn->query($sql) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Account Details<h3>";
echo "<table>
<tr>
<th>ifscode</th>
<th>amount</th>
<th>status</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
$_SESSION["ifsccode"]=$row['ifsccode'];
$_SESSION["amount"]=$row['amount'];
echo "<tr>";
echo "<td>" . $row['ifsccode'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "<td><form action='final.php' method='POST'><select name='status'><option value='yes'>yes</option><option value='no'>No</option></select>
<input type='submit' value='submit'></form></td>";
echo "</tr>";
}
echo "</table>";
echo"<br><br>";
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Block Accounts<h3>";
echo"<nav>
<ul>
<li><a href='final1.php'>Go</a></li></ul></nav>";
echo"<br><br>";
}