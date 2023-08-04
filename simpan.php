<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Simpan Data</title>
</head>

<body>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$n1 = $_POST['nilai1'];
$n2 = $_POST['nilai2'];
$n3 = $_POST['nilai3'];

$r = $n1 + $n2 + $n3;
$rata = $r / 3;
if($rata >= 70){
	$ket = "Lulus ygy";
} else {
	$ket = "Maaf bro, Tidak lulus";
}

include "koneksi.php";
$sql = "INSERT INTO tabel_mahasiswa (nim, nama, matakuliah, nilai1, nilai2, nilai3, rata, keterangan) VALUES('$nim', '$nama', '$matkul', '$n1', '$n2', '$n3', '$rata', '$ket')";
if(mysqli_query($conn, $sql)){
	echo "Data Berhasil Ditambahkan";
} else {
	echo "Gagal Karena". mysqli_error($conn); 
}
?>

<meta http-equiv=refresh content=2;url="index.php">
</body>
</html>
