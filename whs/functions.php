<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "whs");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc( $result ) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambahdata($data){
	global $conn;

	//ambil data dari tiap elemen dalam from
	$Nama_Barang = $data["Nama_Barang"];
	$type = $data["type"];
	$jumlah = $data["jumlah"];
	$Tanggal_Masuk = $data["Tanggal_Masuk"];
	$Tanggal_Keluar = $data["Tanggal_Keluar"];
	$Gambar = $data["Gambar"];

	//query insert data
	$query = "INSERT INTO input_barang
				VALUES
				('', '$Nama_Barang', '$type', '$jumlah', '$Tanggal_Masuk', '$Tanggal_Keluar', '$Gambar')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn); 
} 

?>