<div class="form-masuk">
	<div class="header-form-masuk">
		<span class="header-form">Selamat Datang</span>
		<span class="nm"><?php echo $guru['nama']; ?></span>
	</div>

	<div class="">
		<div class="dt-usr">
			<img src="<?php echo base_url('resource/img/photo/'.$guru['foto']); ?>">
			<p><span><?php echo $guru['nik']; ?></span></p>
			<p><span><a href="<?php echo site_url('guru'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></span></p>
			<p><span><a href="<?php echo site_url('guru/materi_pelajaran'); ?>"><i class="glyphicon glyphicon-file"></i> Materi Pelajaran</a></span></p>
			<p><span><a href="<?php echo site_url('guru/pengumuman'); ?>"><i class="glyphicon glyphicon-share-alt"></i> Pengumuman</a></span></p>
			<p><span><a href="<?php echo site_url('p_guru/keluar_guru'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span></p>
		</div>
	</div>
</div>