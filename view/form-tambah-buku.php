<!-- <p>Tambahkan input sesuai kolom pada tabel buku</p> -->

<form method="POST" action="?page=insert-buku">
	<h2>Tambah Buku</h2>
	<table>
		<tr>
			<td>Kode Buku</td>
			<td>:</td>
			<td><input type="number" name="kode"></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input name="judul"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td>:</td>
			<td><input type="number" name="tt"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button>Tambah Data Buku</button></td>
		</tr>
	</table>
</form>