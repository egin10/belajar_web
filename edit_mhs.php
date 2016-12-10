<?php
require_once 'koneksi.php';

$nim=$_GET['nim'];
$sql="SELECT * FROM data_mhs WHERE nim='$nim'";
$sql= mysqli_query($konek, $sql);
$sql = mysqli_fetch_array($sql);
?>

<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<table border="1">
		 <form method="get" action="update.php">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $sql[0];?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $sql[1];?>" disabled></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="<?php echo $sql[2];?>"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>
				 <select name="semester">
					<option value="Semester 1" <?php if ($sql[3]=='Semester 1') { echo "selected"; } ?>>Semester 1</option>
					<option value="Semester 2" <?php if ($sql[3]=='Semester 2') { echo "selected"; } ?>>Semester 2</option>
					<option value="Semester 3" <?php if ($sql[3]=='Semester 3') { echo "selected"; } ?>>Semester 3</option>
					<option value="Semester 4" <?php if ($sql[3]=='Semester 4') { echo "selected"; } ?>>Semester 4</option>
					<option value="Semester 5" <?php if ($sql[3]=='Semester 5') { echo "selected"; } ?>>Semester 5</option>
					<option value="Semester 6" <?php if ($sql[3]=='Semester 6') { echo "selected"; } ?>>Semester 6</option>
				 <select>	
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Update"></td>
			</tr>
			<tr>
		 </form>
		<table>
	</body>
</html>