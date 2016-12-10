<?php 
include ('koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pass = $_POST['password'];
$semester = $_POST['semester'];

if(isset($_POST['submit']))
{
	//nim tidak perlu lagi di update, karena gak di ubah saat di form edit
	$update = mysql_query("UPDATE data_mhs SET nama = '$nama', password = '$pass', semester = '$semester' WHERE nim = '$nim'") or die("hmm");

	if($update){
		echo "Data berhasil di update. <a href='data_mhs.php'>Back</a>";
	}else{
		echo "Data tidak bisa di update. <a href='data_mhs.php'>Back</a>";
	}

}

?>