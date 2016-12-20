<?php
$nim=$_GET['nim'];

require_once 'koneksi.php';

$sql="DELETE FROM data_mhs WHERE nim='$nim'";
$sql= mysqli_query($konek, $sql);
mysqli_errno($sql);
 if ($sql)
{
	header ('location:index.php?Berhasil');
}
else
{
	header ('location:data_mhs.php?gagal');
}


?> 