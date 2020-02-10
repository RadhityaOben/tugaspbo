<?php
	
	$id = $_GET['kode'];

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");

	$judul = $_POST['judul'];
	$tt = $_POST['tt'];

	if ($judul && $tt) {
		mysqli_query($conn, "UPDATE buku SET judul = '$judul' WHERE kode_buku = '$id'");
		mysqli_query($conn, "UPDATE buku SET tahun_terbit = '$tt' WHERE kode_buku = '$id'");
		echo "Edit Data Berhasil";
	}
	else {
		echo "Edit Data Gagal";
	}

?>