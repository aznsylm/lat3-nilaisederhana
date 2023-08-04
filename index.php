<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Nilai Mahasiswa</title>
</head>

<body>
<?php
$date = date("d F Y, H:i:s");
include "koneksi.php";
$sql = "SELECT * FROM tabel_mahasiswa";
$result = mysqli_query($conn, $sql);
$jumlah = mysqli_num_rows($result);

echo "<pre>";
echo "Tanggal dan waktu: $date <br>";
echo "Jumlah Record = $jumlah Mahasiswa";

?>
<br />
<table>
	<tr >
		<td>NIM </td>
		<td>Nama </td>
		<td>MataKuliah</td>
		<td>Nilai1 </td>
		<td>Nilai2 </td>
		<td>Nilai3 </td>
		<td>Rata-rata </td>
		<td>Keterangan </td>
		<td>Hapus</td>
	</tr>
	<?php
	while($record = mysqli_fetch_array($result)){
	$nim = $record['nim'];
	$nama = $record['nama'];
	$matkul = $record['matakuliah'];
	$n1 = $record['nilai1'];
	$n2 = $record['nilai2'];
	$n3 = $record['nilai3'];
	$rata = $record['rata'];
	$ket = $record['keterangan'];
	
	echo "
	<tr>
	<td>$nim</td><td>$nama</td><td>$matkul</td><td>$n1</td><td>$n2</td><td>$n3</td><td>$rata</td><td>$ket</td></tr>
	";
	}
	?>
</table>
<a href="input.php">Input kembali nilai mahasiswa</a><br />
</body>
</html>
