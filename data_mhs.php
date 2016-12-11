 <?php 
 include ('koneksi.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<style>
	td
	{
		text-align : center;
	}
</style>
<body>
	<h1>Data Mahasiswa</h1>	

	<table border = "1" width = "600px" >
		<tr bgcolor = "silver">
		<td>nim</td>
		<td>nama</td>
		<td>password</td>
		<td>semester</td>
		<td>action</td>
		</tr>
	<?php 
		$query = mysql_query("SELECT * FROM data_mhs");

		while ($data = mysql_fetch_array($query)) 
		{ ?>
		<tr> 
		<td ><?php echo $data['nim'] ; ?></td>
		<td ><?php echo $data['nama'] ; ?></td>
		<td ><?php echo $data['password'] ; ?></td>
		<td ><?php echo $data['semester'] ; ?></td>
		<td><a href = "edit_mhs.php?nim=<?php echo $data['nim'] ; ?>">Edit</a>
		<a href = "hapus_mhs.php?nim=<?php echo $data['nim'] ; ?>">/Delete</a></td>
		</tr>

	<?php } ?>
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