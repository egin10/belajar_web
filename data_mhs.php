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
	
				<table border="1">
					<tr bgcolor="grey">
						<th width="20%">Nama</th>
						<th width="20%">NIM</th>
						<th width="20%">Password</th>
						<th width="20%">Semester</th>
						<th width="20%">Action</th>
					</tr>
	
	<?php 
		$query = mysqli_query($konek,"SELECT * FROM data_mhs");

		while ($data = mysqli_fetch_array($query)) {
	?>
					<tr>
						<td><?php echo $data[0];?></td>
						<td><?php echo $data[1];?></td>
						<td><?php echo $data[2];?></td>
						<td><?php echo $data[3];?></td>
						<td>
							<a href="edit_mhs.php?nim=<?php echo $data[1];?>">Edit</a>
							<a href="del_mhs.php?nim=<?php echo $data[1];?>">Hapus</a>
						</td>
					</tr>

	<?php			
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