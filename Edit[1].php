<?php
	include ("koneksi.php");
	$nama_masakan=$_POST['nama_masakan'];
	$keterangan_singkat=$_POST['keterangan_singkat'];
	$deskripsi=$_POST['deskripsi'];
	$gambar=$_POST['gambar'];
	$judul_gambar=$_POST['judul_gambar'];
	
	$query= "update makanan set nama_masakan='$nama_masakan', keterangan_singkat='$keterangan_singkat', deskripsi='$deskripsi', gambar='$gambar', judul_gambar='$judul_gambar'";
	$exe=mysql_query($query, $conn);
		
	if ($exe){
		echo "<script>alert('update Berhasil')
		location.replace('index.php')</script>";
	} else {
		echo "<script>alert('update Gagal')
		location.replace('index.php')</script>";
	}
?>