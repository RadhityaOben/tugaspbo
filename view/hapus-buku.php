<?php
	
	$kode = $_GET['kode'];

	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "db_latihan");
	$hasil = mysqli_query($conn, "SELECT * FROM buku WHERE kode_buku = '$kode'");
	$data = mysqli_fetch_row($hasil);

?>

<form>
	<h2>Apakan Anda Yakin Ingin Menghapus Data Di Bawah Ini?</h2>
	<table>
		<tr>
			<td>Kode Buku</td>
			<td>:</td>
			<td><input type="number" name="kode" value="<?= $data[0] ?>" disabled></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input name="judul" value="<?= $data[1] ?>" disabled></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td><input type="number" name="tt" value="<?= $data[2] ?>" disabled></td>
		</tr>
		<tr>
			<td></td>
			<td><button><a href="?page=delete-buku&kode=<?= $data[0]?>">YA</a></button></td>
			<td><button><a href="?page=daftar-buku">TIDAK</a></button></td>
		</tr>
	</table>
</form>