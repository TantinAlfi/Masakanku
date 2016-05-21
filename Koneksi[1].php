<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="warungmakan";
	
	$koneksi=mysql_connect($host, $user, $pass);
	$database=mysql_select_db($db, $koneksi);
	
	if($database) {
		echo "Berhasil koneksi";
		} else {
		echo "Gagal koneksi";
		}
?>