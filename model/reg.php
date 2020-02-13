<?php
	
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");

	$username = $_POST['username'];
	$pass = $_POST['pass'];

	if ($username && $pass) {
		mysqli_query($conn, "INSERT INTO user VALUES ('$username', '$pass')");
		echo "Registrasi Berhasil";
	}
	else {
		echo "Registrasi Gagal";
	}

?>