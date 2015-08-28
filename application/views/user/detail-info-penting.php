<h3 class="header-isi">Detail Informasi Penting</h3>
<div class="postingan">
	<div class="single-detail-berita">
		<h1><?php echo $detail_informasi['judul']; ?></h1>
		<span class="date"><i class="glyphicon glyphicon-time"></i> <?php echo $detail_informasi['tgl_upload']; ?></span>
		<p>	<?php echo $detail_informasi['isi']; ?></p>
		<a href="<?php echo site_url('admin/ubah_informasi/'.$detail_informasi['id']); ?>"><i class="glyphicon glyphicon-edit" style="margin-right:5px;"></i>Ubah</a> | <a href="<?php echo site_url('p_admin/hapus_informasi/'.$detail_informasi['id']); ?>"><i class="glyphicon glyphicon-trash" style="margin-right:5px;"></i>Hapus</a>
	</div>
</div>