<!-- <p>Tambahkan kode PHP untuk menampilkan data tabel buku dalam format tabel pada halaman ini.</p> -->
<?php

	$conn = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conn, "db_latihan");
		$hasil = mysqli_query($conn, "SELECT * FROM buku");
				
		echo " <h2>Daftar Buku</h2>
		<table border='1'>
			<tr>
				<th>Kode Buku</th>
				<th>Judul</th>
				<th>Tahun Terbit</th>
				<th>Tools</th>
			</tr>";
		while($data = mysqli_fetch_row($hasil))
		{
			echo "<tr><td>" . $data[0] . "</td>";
			echo "<td>" . $data[1] . "</td>";
			echo "<td>" . $data[2] . "</td>";
			echo "<td><a href='?page=edit-buku&id=$data[0]'>Edit</a></td>";
		}
		echo "</table>";


?>