<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "whs");

//ambil data dari tabel input_barang
$result = mysqli_query($conn, "SELECT * FROM input_barang")

//ambil data input_barang dari object result
//mysqli_fetch_row()
//mysqli_fetch_assoc()
//mysqli_fetch_array()
//m ysqli_fetch_object()

//while ( $whs = mysqli_fetch_assoc($result)) {
//	var_dump($whs);
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

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
	<?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
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
<?php endwhile; ?>
</table>

</body>
</html>