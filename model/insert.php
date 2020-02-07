<!-- <p>Tambahkan kode PHP untuk menambahkan data ke tabel buku. Tampilkan pesan jika data <b>berhasil atau gagal</b> ditambahkan ke tabel buku.</p> -->

<?php

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");

	$kode = $_POST['kode'];
	$judul = $_POST['judul'];
	$tt = $_POST['tt'];

	if ($kode && $judul && $tt) {
		mysqli_query($conn, "INSERT INTO buku VALUES ('$kode', '$judul', '$tt')");
		echo "Tambah Data Berhasil";
	}
	else {
		echo "Tambah Data Gagal";
	}

?>