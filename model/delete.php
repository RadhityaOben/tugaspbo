<?php
	
	$id = $_GET['kode'];

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");

	mysqli_query($conn, "DELETE FROM buku WHERE kode_buku='$id'");
	echo "Data berhasil dihapus";

?>