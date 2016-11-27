<?php 
include('koneksi.php');

$namaMhs = $_POST['nama'];	
$nimMhs = $_POST['nim'];
$pass = $_POST['password'];
$smtr = $_POST['semester'];

if(isset($_POST))
{
	$input = mysql_query("INSERT INTO data_mhs (nama, nim, password, semester) VALUES ('$namaMhs', '$nimMhs', '$pass', '$smtr')") or die ("Data tidak dapat di input");

	echo "Data berhasil di input!, <a href='index.php'> Kembali </a>";
}

?>