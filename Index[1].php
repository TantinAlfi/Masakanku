<?php
	include "header.php";
	include "koneksi.php";
	$query=mysql_query("SELECT * FROM menu");
?>

	<section class="content">
	<?php
		while($data=mysql_fetch_array($query)){
	?>
		<article>
			<figure>
			<img src="gambar/<?php echo $data['gambar']?>" alt="soto" width="290" height="190"  />
			<figcaption><?php echo $data['caption']?></figcaption>
			</figure>
			<hgroup>
				<h2><?php echo $data['judul']; ?></h2>
				<h3><?php echo $data['subjudul'] ?></h3>
			</hgroup>
			<p><?php echo $data['deskripsi'] ?></p>
		</article>
		<?php
		}
		?>
	 </section>
<?php
	include "sidebar.php";
	include "footer.php";
?>
		