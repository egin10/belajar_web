<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
	<h1>Form Data Mahasiswa TI</h1>

	<form action="prosesInput.php" method="POST">
		<label>Nama</label>
		<input type="text" name="nama" value="" placeholder="Nama Anda">
		<br>

		<label>Nim</label>
		<input type="text" name="nim" value="" placeholder="Nim Anda">
		<br>

		<label>Password</label>
		<input type="password" name="password" placeholder="password">
		<br>

		<label>Semester</label>
		<select name="semester">
			<option value="Semester 1">Semester 1</option>
			<option value="Semester 2">Semester 2</option>
			<option value="Semester 3">Semester 3</option>
			<option value="Semester 4">Semester 4</option>
			<option value="Semester 5">Semester 5</option>
			<option value="Semester 6">Semester 6</option>
		</select>
		<br>
		
		<input type="submit" name="submit" value="submit">
	</form>
	
	<p>
		<a href="data_mhs.php">Lihat Data</a>
	</p>
</body>
</html>	