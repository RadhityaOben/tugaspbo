<?php
	$base_url = 'http://localhost/tugaspbo/';
	include 'template/header.php';
?>	

<?php

	if ($_GET) {

		$page = $_GET['page'];
		
		switch ($page) {
			case 'tambah-buku':
				include('view/form-tambah-buku.php');
				break;
			case 'daftar-buku':
				include('view/daftar-buku.php');
				break;
			case 'edit-buku':
				include('view/edit-buku.php');
				break;
			case 'hapus-buku':
				include('view/hapus-buku.php');
				break;
			case 'insert-buku':
				include('model/insert.php');
				break;
			case 'edits-buku':
				include('model/edits.php');
				break;
			case 'delete-buku':
				include('model/delete.php');
				break;
			default:
				include('view/not-found.php');
		}

	} else {
		include('view/homepage.php');
	}

?>