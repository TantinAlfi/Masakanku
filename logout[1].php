<?php
	session_start();
	unset($_SESSION['namalengkap']);
	header('Location: index.php')
?>