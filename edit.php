<?php

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$kategori = $_POST['kategori'];

include "koneksi.php";

$update= $conn->query("UPDATE tbl_blog  SET judul= '$judul', isi='$isi',kategori='$kategori' WHERE id ='$id'");

	if($update){
        echo "Berhasil Disimpan";
		header ('Location:http://latlat.test/?menu=3');
	}else{
		echo "Gagal Disimpan";
	}


?>
