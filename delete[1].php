<?php
	include ("koneksi.php");
	$nama_masakan=$_GET[nama_masakan];
	
	$query="delete from makanan where nama_masakan='$nama_masakan'";
	$exe=mysql_query($query);
	
	if ($exe){
		echo "<script>alert('update Berhasil')
		location.replace('index.php')</script>";
	} else {
		echo "<script>alert('update Gagal')
		location.replace('index.php')</script>";
	}
?>