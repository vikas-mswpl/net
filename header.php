<?php
session_start();
?>
<html>
<head>
<title>MNC</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<font color = "green">
<header>
<nav>
<ul>
<li><a href="sample.php">Home</a></li>
<?php
if (isset($_SESSION['id']))
{
	echo "<form action='includes/logout.inc.php'>
<button>LOG OUT</button>
</form>";
}
else
{
	echo"
<form action='includes/login.inc.php' method='POST'>
     <input type = 'text' name = 'uid' placeholder='Email'>
	 <input  type = 'password' name = 'pwd' placeholder='Password'>
     <button type-'submit'>LOGIN</button>
</form>";
}
?>
<li><a href="signup.php">SIGN UP</a></li>
</ul>
</nav>
</header>
