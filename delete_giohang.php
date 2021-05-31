<?php 
session_start();
$masp = $_GET["masp"];
	if (isset($_SESSION["cart"][$masp])) {		
		unset($_SESSION["cart"][$masp]);
		header("location:http://localhost/final/Do-an/sql_test4.php");
	}
 ?>