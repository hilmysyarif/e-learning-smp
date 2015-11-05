<h3 class="header-sidebar">Selamat Datang</h3>
<!-- form login siswa -->
<div class="form-login-sidebar">
	<img src="<?php echo base_url('resource/img/photo/'.$guru['foto']); ?>">
	<div class="info-login-sidebar">
		<span><?php echo $guru['nik']; ?></span>
		<span><a href="<?php echo site_url('guru'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></span>
		<span><a href="<?php echo site_url('guru/materi_pelajaran'); ?>"><i class="glyphicon glyphicon-file"></i> Materi Pelajaran</a></span>
		<span><a href="<?php echo site_url('guru/pengumuman'); ?>"><i class="glyphicon glyphicon-share-alt"></i> Pengumuman</a></span>
		<span><a href="<?php echo site_url('p_guru/keluar_guru'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
	</div>
</div>
