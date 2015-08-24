<div class="form-masuk">
	<div class="header-form-masuk">
		<span>Selamat Datang,</span>
		<span class="nm"><?php echo $this->session->userdata['login_admin']['nama']; ?></span>
	</div>

	<div class="">

		<div class="dt-usr">
			<img src="<?php echo base_url('resource/img/photo/11.11.5304.jpg'); ?>">
			<p><span><?php echo $this->session->userdata['login_guru']['nik']; ?></span></p>
			<p><span><a href="<?php echo site_url('p_guru/keluar_admin'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span></p>
		</div>

	</div>
</div>