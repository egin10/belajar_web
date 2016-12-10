<?php
include ('koneksi.php');

$nim = $_GET['nim'];
$query = mysql_query("SELECT * FROM data_mhs WHERE nim = '$nim'");
$data = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h1>Form Edit Data</h1>
	<table>
	<form action="update.php" method="POST">
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>: <input type="text" name="nim" disabled value="<?php echo $data['nim'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="text" name="password" value="<?php echo $data['password'] ?>"></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td> :
				<select name="semester">
					<option value="Semester 1" <?php if( $data['semester'] == 'Semester 1' ){ echo "selected";} ?> >Semester 1</option>
					<option value="Semester 2" <?php if( $data['semester'] == 'Semester 2' ){ echo "selected";} ?> >Semester 2</option>
					<option value="Semester 3" <?php if( $data['semester'] == 'Semester 3' ){ echo "selected";} ?> >Semester 3</option>
					<option value="Semester 4" <?php if( $data['semester'] == 'Semester 4' ){ echo "selected";} ?> >Semester 4</option>
					<option value="Semester 5" <?php if( $data['semester'] == 'Semester 5' ){ echo "selected";} ?> >Semester 5</option>
					<option value="Semester 6" <?php if( $data['semester'] == 'Semester 6' ){ echo "selected";} ?> >Semester 6</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Update">
			</td>
		</tr>
		<tr>
			<td>
				<a href="data_mhs.php">back</a>
			</td>
		</tr>
	</form>
	</table>
</body>
</html>