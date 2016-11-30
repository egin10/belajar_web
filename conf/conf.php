<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "belajar_web";

$connect = mysql_connect($host, $user, $pass) or die ("MySQL not connect!");
$select_db = mysql_select_db($db) or die ("can't connect to database");
?>