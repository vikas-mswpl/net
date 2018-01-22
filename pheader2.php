<?php
echo'<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>';
if (isset($_SESSION['ifsccode']))
{
echo'
<nav>
<ul>
<li><a href="home.php">Home</a></li>
&nbsp&nbsp&nbsp
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>';}
else{
echo'<nav>
<ul>
<li><a href="register.php">Register</a></li>
&nbsp&nbsp&nbsp
<li><a href="login.php">Login</a></li>
</ul>
</nav>';}
echo"</header>";