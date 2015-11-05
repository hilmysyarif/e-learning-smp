<h3 class="header-isi">Berita Terbaru</h3>
<div class="postingan-berita">
	<div class="kt-cr">
		<?php echo form_open('user/index'); ?>
		<input name="kata_kunci" type="text" placeholder="Cari disini . . .">
		<button name="q"><i class="glyphicon glyphicon-search"></i>Cari</button>
		<?php echo form_close(); ?>
	</div>
	<ul class="list-post">
		<?php foreach ($berita as $row) { ?>
		<li>
			<div class="post-single">
				<img src="<?php echo base_url('resource/img/images/'.$row['gambar']); ?>">
				<span class="date"><i class="glyphicon glyphicon-time"></i> <?php echo $row['tgl_upload']; ?></span> 
				<?php $judul = $row['judul']; $judul = substr($judul, 0, 45);  ?>
				<a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>"><h1><?php echo $judul; ?></h1></a>
				<?php $isi = $row['isi']; $isi = character_limiter($isi, 330); ?>
				<p><?php echo $isi; ?>
				<span class="more"><a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>">Selengkapnya...</a></span>
				</p>
			</div>
		</li>
		<?php } ?>
	</ul>
	<?php echo $pagination; ?>
</div>