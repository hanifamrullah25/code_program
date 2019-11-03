<?php

//untuk memanggil function.php
require 'functions.php';

//notif cek submit sudah ditekan / belum
if( isset($_POST["submit"]) ) {

	
	//cek status penambahan succses/ gagal
	if( tambahdata($_POST) > 0 ) {
		echo "data succses ditambahkan";
	} else{
		echo "data failed";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>tambah data barang</title>
</head>
<body>
	<h1> Tambah data barang</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="Nama_Barang">Nama Barang :</label>
				<input type="text" name="Nama_Barang">
			</li>
			<li>
				<label for="type">Type :</label>
				<input type="text" name="type">
			</li>
			<li>
				<label for="jumlah">Jumlah :</label>
				<input type="text" name="jumlah">
			</li>
			<li>
				<label for="Tanggal_Masuk">Tanggal Masuk :</label>
				<input type="text" name="Tanggal_Masuk">
			</li>
			<li>
				<label for="Tanggal_Keluar">Tanggal Keluar :</label>
				<input type="text" name="Tanggal_Keluar">
			</li>
			<li>
				<label for="Gambar">Gambar :</label>
				<input type="text" name="Gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>

	<a href="index.php">Tabel Data</a>
<br><br>

</body>
</html>