<?php
	include "header.php";
?>
	<section class="content">
		<article>
			<hgroup>
				<h2>Form Tambah Data Masakan</h2>
				<h3>Isikan form dibawah ini dengan lengkap</h3>
			</hgroup>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST"
				enctype="multipart/form-data">
			<table>
				<tr>
					<td>Nama Masakan</td>
					<td><input type="text" name="subjudul" /></td>
				</tr>
				<tr>
					<td>Keterangan Singkat</td>
					<td><input type="text" name="subjudul" /></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><textarea cols="50" rows="5" name="deskripsi" /></textarea></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><input type="file" name="gambar" /></td>
				</tr>
				<tr>
					<td>Judul Gambar</td>
					<td><input type="text" name="caption" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="tambah" value="TAMBAH" /></td>
				</tr>
			</table>
			</form>
		</article>
	</section>
<?php
if (isset($_POST['tambah'])){
	include "koneksi.php";
	$judul=$_POST['judul'];
	$subjudul=$_POST['subjudul'];
	$deskripsi=$_POST['deskripsi'];
	$caption=$_POST['caption'];
	$gambar=$_FILES["gambar"]["name"];
	$sumber=$_FILES["gambar"]["tmp_name"];
	
	if(move_uploaded_file($sumber, "images/".$gambar))
	{
		$insert=mysql_query("INSERT INTO menu VALUES('','$judul','$subjudul','$deskripsi','$gambar','$caption')");
		if($insert){
			$pesan="Data berhasil diinputkan";
			header("Location: dasboard.php?ps="$pesan);
		} else {
			$pesan="Data gagal diinputkan";
			header("Location: dasboard.php?ps=".$pesan);
		}
	} else {
		$pesan="Data gagal diinsert, karena gambar tidak bisa diupload";
		header("Location: dasboard.php?ps=".$pesan);
	}
}
<?php
	include "sidebar.php";
	include "footer.php";
?>