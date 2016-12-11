<?php 
include "koneksi.php";
	if($_POST['submit'])
	{
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$password = $_POST['password'];
		$semester = $_POST['semester'];

		//echo $nama . " " . $nim . " " . $password . " " . $semester ;

		$q_insert = "UPDATE data_mhs 
					 SET nama ='$nama', password ='$password', semester ='$semester'
					 WHERE nim = $nim ; " ;

		$s_insert = mysql_query($q_insert);

		if($s_insert)
		{
			echo "data telah berhasil di update. " ;
			echo $nama . " " . $nim . " " . $password . " " . $semester ;

		}
		else
		{
			echo "maaf, data gagal di update.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<style>
	
</style>
<body>
	<a href = "data_mhs.php">back</a>
</body>
</html>
