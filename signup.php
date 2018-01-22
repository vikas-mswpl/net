<?php
include 'header.php'
?>
<br><br>
<?php
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url,'error=empty')!==false);
{
	echo"Fill all fields!";
}
if (isset($_SESSION['id']))
{
	echo "you are alreadey logged in";
}
else {echo"
<form action='includes/signup.inc.php' method='POST' style='padding:80px'>
         First name: <input type = 'text' name = 'first'>
         <br><br>
         Last name : <input type = 'text' name = 'last' >
	 <br><br>
	 Password: <input  type = 'password' name = 'pwd'>
         <br><br>
         Email     : <input type = 'text' name = 'uid'/>
         <br><br> 
<button type-'submit'>signup</button>
</form>";
}
?>
</body>       
</html>