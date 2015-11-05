<h3 class="header-sidebar">Selamat Datang</h3>
<!-- form login siswa -->
<div class="form-login-sidebar">
	<img src="<?php echo base_url('resource/img/logo/default-user.png'); ?>">
	<div class="info-login-sidebar">
		<span><?php echo $this->session->userdata['login_admin']['email']; ?></span>
		<span><a href="<?php echo site_url('admin/data_halaman'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Halaman</a></span>
		<span><a href="<?php echo site_url('admin/data_siswa'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Siswa</a></span>
		<span><a href="<?php echo site_url('admin/data_guru'); ?>"><i class="glyphicon glyphicon-chevron-right"></i> Data Guru</a></span>
		<span><a href="<?php echo site_url('p_admin/keluar_admin'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
	</div>
</div>
