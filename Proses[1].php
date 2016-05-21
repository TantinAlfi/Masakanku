<?php
session_start();
if (isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//cek koneksi
	include "koneksi.php";
	$query=mysql_query("SELECT * FROM user WHERE username='$username'");
	$data=mysql_fetch_array($query);
	//cek password
	if($password==$data['password']) {
		$_SESSION['namalengkap']=$data['namalengkap'];
		header('Location: dashboard.php');
	} else {
		$pesan="Maaf pesan salah";
		header('Location: index.php?ps='.$pesan);
	}
} else {
	header ("Location: index.php");
}
?>