<!-- <?php
	$namaMhs = $_POST['nama'];
	$nimMhs = $_POST['nim'];
	$pass = $_POST['password'];
	$smtr = $_POST['semester'];
?>
 -->
 <?php
 include ('koneksi.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
<style type="text/css">
body{
  background: #4a8bc2;
}
h1{
  color: #000;
  font-family: arial;
  font-weight: lighter;
  margin-top: 5px;
  margin-bottom: 5px;
}
table{
  border-radius:5px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16), 0 2px 10px rgba(0, 0, 0, 0.12);
}
td{
  font-family: arial;
  text-align: center;
  background:  #5d6167;
  width: 100px;
  height: 40px;
  color: #fff;
  border: 0px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  transition: all 0.3s ease;
}
th{
  font-family:sans-serif;
  height: 30px;

}
a{
  font-family: sans-serif;
  font-family: Arial;
  color: white;

}
a:hover{
  color: #1abc9d;
}
</style>

	<h1><center>Data Mahasiswa</center></h1>
  <table align=center border=0>
    <tr bgcolor="white"><!--baris-->
      <th>Nama</th>
      <th>Nim</th>
      <th>Password</th>
      <th>Semester</th>
      <th>Action</th>
    </tr>

	<?php
		$query = mysql_query("SELECT * FROM data_mhs");

		while ($data = mysql_fetch_array($query)) {
			echo "<tr><td>"
				.$data['nama']. //fungsi titik untuk menyambungkan php
				"</td><td>".
				$data['nim'].
				"</td><td>".
				$data['password'].
				"</td><td>".
				$data['semester'].
        "</td><td>".
        "<a href='edit_mhs.php?nim=".$data['nim']."'>edit</a>"."|".
        "<a href='delete_mhs.php?nim=".$data['nim']."'>hapus</a>".
        "</tr></tr>";
		}
	?>
  </table>
	<!-- paragraf ke-1 -->
	<!-- <p>
		<?php echo $namaMhs; ?> <br>
		<?php echo $nimMhs; ?> <br>
		<?php echo $pass; ?> <br>
		<?php echo $smtr; ?>
	</p> -->

	<!-- pragraf ke-2 -->
	<!-- <p>
		<?php echo $namaMhs."<br>".$nimMhs."<br>".$pass."<br>".$smtr; ?>
	</p> -->

	<!-- hyperlink -->
	<a href="index.php">back</a>
</body>
</html>
