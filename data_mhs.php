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
	<h1>Data Mahasiswa</h1>	
	
	<table border=1>
		<tr bgcolor="grey">
			<td>Nama</td>
			<td>Nim</td>
			<td>Password</td>
			<td>Semester</td>
			<td>Action</td>
		</tr>
		
	<?php 
		$query = mysql_query("SELECT * FROM data_mhs");

		while ($data = mysql_fetch_array($query)) {
			echo "<tr><td>".
				$data['nama'].
				"</td><td>".
				$data['nim'].
				"</td><td>".
				$data['password'].
				"</td><td>".
				$data['semester'].
				"</td><td>".
				"<a href='edit_mhs.php?nim=".$data['nim']."'>Edit</a>".
				"| <a href='delete_mhs.php?nim=".$data['nim']."'>Delete</a>".
				"</td></tr>";
		}
	?>
		
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