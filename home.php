<?php
session_start();
include 'pheader.php';
if (isset($_SESSION['ifsccode']))
{
	echo '<div>
<ul style="    padding: 25px 50px 75px 100px;">
<li><a href="accountdetails.php" >Account Details</a></li>
&nbsp&nbsp&nbsp
<li><a href="deposit.php">Request Funds</a></li>
&nbsp&nbsp&nbsp
<li><a href="transfer.php">Transfer</a></li>
&nbsp&nbsp&nbsp
<li><a href="benificiary.php">Add Benificiary</a></li>
</ul>
</div>
</body>
</html>';
}
else
{
	echo"you are not logged in";
}
?>
