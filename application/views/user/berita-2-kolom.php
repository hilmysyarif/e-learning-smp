<h3 class="header-isi">Berita Terbaru</h3>
<div class="postingan-berita">
	<div class="kt-cr">
		<?php echo form_open('user/index'); ?>
		<input name="kata_kunci" type="text" placeholder="Cari disini . . .">
		<button name="q"><i class="glyphicon glyphicon-search"></i>Cari</button>
		<?php echo form_close(); ?>
	</div>
	<ul class="list-post-2-kolom">
		<?php foreach ($berita as $row) { ?>
		<li>
			<div class="post-single-2-kolom">
				<a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>"><img src="<?php echo base_url('resource/img/images/'.$row['gambar']); ?>" /></a>
				<span class="date"><i class="glyphicon glyphicon-time"></i> <?php echo $row['tgl_upload']; ?></span> 
				<?php $judul = $row['judul']; $judul = substr($judul, 0, 300);  ?>
				<a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>"><h2><?php echo $judul; ?></h2></a>
				<?php $isi = $row['isi']; $isi = character_limiter($isi, 100); ?>
				<div class="wrapper-post-single-2-kolom">
					<?php echo $isi; ?>
					<span class="more-2-kolom"><a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>">Selengkapnya...</a></span>
				</div>
			</div>
		</li>
		<?php } ?>
	</ul>
	<?php echo $pagination; ?>
</div>