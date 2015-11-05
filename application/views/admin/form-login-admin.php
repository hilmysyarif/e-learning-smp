<div class="form-masuk">
	<div class="header-form-masuk">
		<span class="header-form">Selamat Datang</span>
		<span class="nm"><?php echo $this->session->userdata['login_admin']['nama']; ?></span>
	</div>

	<div class="">

		<div class="dt-usr">
			<img src="<?php echo base_url('resource/img/logo/Logo.png'); ?>">
			<p><span><?php echo $this->session->userdata['login_admin']['email']; ?></span></p>
			<p><span><a href="<?php echo site_url('admin/data_halaman'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Halaman</a></span></p>
			<p><span><a href="<?php echo site_url('admin/data_siswa'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Siswa</a></span></p>
			<p><span><a href="<?php echo site_url('admin/data_guru'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Guru</a></span></p>
			<p><span><a href="<?php echo site_url('p_admin/keluar_admin'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span></p>
		</div>

	</div>
</div>