<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
	<h1>Form Data Mahasiswa TI</h1>
<table border="0">
	<form action="prosesInput.php" method="POST">
	<tr>
		<td width="20%"><label>Nama</label></td>
		<td width="10%">:</td>
		<td width="70%"><input type="text" name="nama" value="" placeholder="Nama Anda"></td>
	</tr>
	<tr>
		<td width="20%"><label>Nim</label></td>
		<td width="10%%">:</td>
		<td width="70%%"><input type="text" name="nim" value="" placeholder="Nim Anda"></td>
	</tr>
	<tr>
		<td width="20%"><label>Password</label></td>
		<td width="10%%">:</td>
		<td width="70%%"><input type="password" name="password" placeholder="password"></td>
	</tr>
	<tr>
		
		<td width="20%"><label>Semester</label></td>
		<td width="10%%">:</td>
		<td width="70%"><select name="semester">
			<option value="Semester 1">Semester 1</option>
			<option value="Semester 2">Semester 2</option>
			<option value="Semester 3">Semester 3</option>
			<option value="Semester 4">Semester 4</option>
			<option value="Semester 5">Semester 5</option>
			<option value="Semester 6">Semester 6</option>
		</select></td>
	</tr>
	<tr>	
		<td align="center"><input type="submit" name="submit" value="submit"></td>
	</tr>	
	</form>
</table>	
	
	<p>
		<a href="data_mhs.php">Lihat Data</a>
	</p>
</body>
</html>	