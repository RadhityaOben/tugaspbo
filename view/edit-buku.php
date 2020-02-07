<?php
	
	$id = $_GET['id'];

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");
	$hasil = mysqli_query($conn, "SELECT * FROM buku WHERE kode_buku = '$id'");
	$data = mysqli_fetch_row($hasil);

?>

<form method="POST" action="?page=insert-buku">
	<h2>Edit Buku</h2>
	<table>
		<tr>
			<td>Kode Buku</td>
			<td>:</td>
			<td><input type="number" name="kode" value="<?= $data[0] ?>" disabled></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input name="judul" value="<?= $data[1] ?>"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td><input type="number" name="tt" value="<?= $data[2] ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button>Tambah Data Buku</button></td>
		</tr>
	</table>
</form>