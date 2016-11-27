<?php 
$host = "localhost"; //url
$user = "root"; //user database
$pass = ""; //password database
$db = "belajar_web"; //nama database

$konek = mysql_connect($host, $user, $pass) or die ("tidak terhubung"); //connection to database
mysql_select_db($db) or die ("database tidak ada"); //select database

?>