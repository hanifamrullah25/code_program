<?php
require 'functions.php';

$whs = query("SELECT * FROM input_barang")

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Barang di Gudang</h1>

<a href="tambahdata.php">tambah data</a>
<br><br>

<table border="1" cellpadding="10"  cellspacing="0">
 	
	<tr>
		<th>No.</th>
		<th>ID_Barang</th>
		<th>Nama_Barang</th>
		<th>type</th>
		<th>jumlah</th>
		<th>Tanggal_Masuk</th>
		<th>Tanggal_Keluar</th>
		<th>Gambar</th>
		<th>Status</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $whs as $row)  : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["ID_Barang"] ?></td>
		<td><?= $row["Nama_Barang"] ?></td>
		<td><?= $row["type"] ?></td>
		<td><?= $row["jumlah"] ?></td>
		<td><?= $row["Tanggal_Masuk"] ?></td>
		<td><?= $row["Tanggal_Keluar"] ?></td>
		<td><img src="gudang/<?php echo $row["Gambar"]; ?>" width="50"></td>
		<td>
			<a href="">update</a>
			<a href="">hapus</a>
		</td>
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
<html>