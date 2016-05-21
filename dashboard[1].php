<?php
	session_start();
	if (!isset($_SESSION['namalengkap'])){
		header('Location: index.php');
	}
	include "header.php";
	include "koneksi.php";
	$query=mysql_query("SELECT * FROM menu");
?>

	<section class="content">
	<br>
	<article>	
			<?php
				echo $_SESSION['namalengkap'];
			?>
		<a href="tambah.php">Tambah Data</a>
		<table border=1>
			<tr> 
				<td>No</td>
				<td>Nama Masakan</td>
				<td>Deskripsi</td>
				<td>Aksi</td>
			</tr>
			<?php
			$no=0;
            while($data=mysql_fetch_array($query)){
			$no++;
			?>
			<tr> 
				<td><?php echo $no; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['deskripsi']; ?></td>
			<td>
				<a href="edit.php?<?php echo $data['id_menu'];?>">Edit</a>
				<a href="hapus.php?<?php echo $data['id_menu'];?>">hapus</a>
			</td>
			</tr>
			<?php
			}
			?>
		</table>
	 </section>
<?php
	include "sidebar.php";
	include "footer.php";
?>
		