<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Input Nilai</title>
</head>

<body>
<pre>
<h1>Input Nilai Mahasiswa</h1>
<form name="form1" method="post" action="simpan.php"> 
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
				<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
				<tr>
			<td>Mata Kuliah</td>
			<td>:</td>
			<td><input type="text" name="matkul"></td>
		</tr>
		<tr>
			<td>Nilai 1</td>
			<td>:</td>
			<td><input type="text" name="nilai1"></td>
		</tr>
		<tr>
			<td>Nilai 2</td>
			<td>:</td>
			<td><input type="text" name="nilai2"></td>
		</tr>
		<tr>
			<td>Nilai 3</td>
			<td>:</td>
			<td><input type="text" name="nilai3"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan" /></td>
			<td><input type="reset" name="batal" value="Batal" /></td>
		</tr>
	</table>
</form>
</body>
</html>
