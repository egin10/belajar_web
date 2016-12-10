<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<style>
	
</style>
<body>
	<?php
	$nim = $_GET['nim'] ;
	$q_edit = "SELECT * FROM data_mhs WHERE nim = '$nim' " ;
	$s_edit = mysql_query($q_edit);
	?> 

	<table >
	<form aciton = "update.php" method = "POST">
		<?php while($r_edit = mysql_fetch_array($s_edit)) { ?>
		<tr>
		<td>nama</td>
		<td>: <input type = "text" value = " <?php echo $r_edit['nama'] ; ?>" ></td>
		</tr>

		<tr>
		<td>NIM</td>
		<td>: <input type = "text" value = " <?php echo $r_edit['nim'] ; ?>" disabled></td>
		</tr>

		<tr>
		<td>password</td>
		<td>: <input type = "text" value = " <?php echo $r_edit['password'] ; ?>" ></td>
		</tr>

		<tr>
		<td>Semester</td>
		<td>: <select name="semester">
				<option value="Semester 1" 
				<?php if($r_edit['semester'] == 'Semester 1'){echo "selected" ;} ?>>Semester 1</option>
				<option value="Semester 2"
				<?php if($r_edit['semester'] == 'Semester 2'){echo "selected" ;} ?>>Semester 2</option>
				<option value="Semester 3"
				<?php if($r_edit['semester'] == 'Semester 3'){echo "selected" ;} ?>>Semester 3</option>
				<option value="Semester 4"
				<?php if($r_edit['semester'] == 'Semester 3'){echo "selected" ;} ?>>Semester 3</option>>Semester 4</option>
				<option value="Semester 5" 
				<?php if($r_edit['semester'] == 'Semester 3'){echo "selected" ;} ?>>Semester 3</option>>Semester 5</option>
				<option value="Semester 6"
				<?php if($r_edit['semester'] == 'Semester 3'){echo "selected" ;} ?>>Semester 3</option>>Semester 6</option>
		</select></td>
		</tr>

		<tr>
			<td><input type = "submit" name = "submit" value = "update"> </td>
		</tr>

		<tr>
			<td><a href = "data_mhs.php"> back </a></td>
		</tr>

		<?php } ?>
	</form>
	</table>
</body>
</html>