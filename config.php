<?php
	
	$sname= "localhost";
	$unmae= "root";
	$password = "toor";
	$db_name = "eshopdb";
	
	$conn = new mysqli("localhost","root","toor","eshopdb");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>