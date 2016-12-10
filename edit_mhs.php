<?php
include ('koneksi.php');

$nim = $_POST['nim'];
$quary = mysql_query('SELECT * FROM data_mhs WHERE nim = $nim');
$data = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
   <head>
        <title>Edit Data</title>title>
   </head>
<body>
     <h1>Form Edit Data</h1>
     <table>
     <form action="update.php" method="POST">
          <tr>
          <td>Nama</td>
          <td>: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
          </td>

          <tr>
          <td>Nim</td>
          <td>: <input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
          </td>
          </tr>

          <tr>
          <td>Password</td>
          <td>: <input type="text" name="Password" value="<?php echo $data['Password']; ?>"></td>
          </td>
          </tr>
          <tr>
          <td>Semester</td>
          <td> :
             <select name="semester">
                <option value="Semester 1" <?