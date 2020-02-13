<?php
	
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");

	$username = $_POST['username'];
	$pass = $_POST['pass'];

	$hasil = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' && password = '$pass'");

	echo " <h2>Daftar User Yang Ditemukan : ";
	echo $hasil->num_rows;
	echo "</h2>
		<table border='1'>
			<tr>
				<th>Username</th>
				<th>Password</th>
			</tr>";
	while($data = mysqli_fetch_row($hasil))
	{
		echo "<tr><td>" . $data[0] . "</td>";
		echo "<td>" . $data[1] . "</td></tr>";
	}
	echo "</table>";


?>