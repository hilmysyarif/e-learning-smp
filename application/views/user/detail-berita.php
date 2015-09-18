<h3 class="header-isi">Detail Berita</h3>
<div class="postingan">
	<div class="single-detail-berita">
		<h1><?php echo $berita['judul']; ?></h1>
		<span class="date"><i class="glyphicon glyphicon-time"></i> <?php echo $berita['tgl_upload']; ?></span>
		<img src="<?php echo base_url('resource/img/images/'.$berita['gambar']); ?>">
		<p>	<?php echo $berita['isi']; ?></p>
		<?php if($this->session->userdata('login_admin')){ ?>
		<a href="<?php echo site_url('admin/ubah_berita/'.$berita['id']); ?>"><i class="glyphicon glyphicon-edit" style="padding-right:5px;"></i>Ubah</a> | <a href="<?php echo site_url('p_admin/hapus_berita/'.$berita['id']); ?>"><i class="glyphicon glyphicon-trash" style="padding-right:5px;"></i>Hapus</a>
		<?php }else{ ?>
		<?php } ?>
	</div>
</div>