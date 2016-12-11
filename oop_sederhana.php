<?php

//OOP dasar dengan PHP

Class Data {
	private $nama;
	private $nim;
	private $kelas;

	protected function isiData($nama, $nim, $kelas){
		$this->nama = $nama;
		$this->nim = $nim;
		$this->kelas = $kelas;
	}

	protected function tampilData(){
		echo "Nama saya <b> $this->nama </b> dengan nim <b> $this->nim </b> dan dikelas <b> $this->kelas </b>";
	}
}

Class Mhs extends Data{

	public function masukanData($nama, $nim, $kelas){
		//masukan data ke class parent
		return $this->isiData($nama, $nim, $kelas);
	}

	public function lihatData(){
		//tampilkan data
		echo "Data : ";
		return $this->tampilData();
	}
}


$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

//buat object baru untuk menampilkan data
$mahasiswa = new Mhs();

$mahasiswa->masukanData($nama, $nim, $kelas);

echo $mahasiswa->lihatData();

?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<form method="POST">
		<h1>masukan data</h1>
		<p>
			nama: <input type="text" name="nama"> <br>
			nim: <input type="text" name="nim"> <br>
			kelas: <input type="text" name="kelas"> <br>
			<input type="submit" name="submit">
		</p>
	</form>
</body>
</html>