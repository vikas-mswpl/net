<?php
$conn = mysqli_connect("localhost","%","","login");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}