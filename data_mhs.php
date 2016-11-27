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
	
	<?php 
		$query = mysql_query("SELECT * FROM data_mhs");

		while ($data = mysql_fetch_array($query)) {
			echo "<p>"
				.$data['nama'].
				"<br>".
				$data['nim'].
				"<br>".
				$data['password'].
				"<br>".
				$data['semester'].
				"</p>";
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