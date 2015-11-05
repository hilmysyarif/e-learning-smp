<div class="form-masuk">
	<div class="header-form-masuk">
		<span class="header-form">Selamat Datang</span>
		<?php if($this->session->userdata('login_siswa')){ ?>
		<span class="nm"><?php echo $siswa['nama']; ?></span>
		<?php }else{ ?>
		<span class="nm"><?php echo $this->session->userdata['login_wali']['nama']; ?></span>
		<?php } ?>
	</div>

	<div class="">
		<div class="dt-usr">
			<img src="<?php echo base_url('resource/img/photo/'.$siswa['foto']); ?>">
			<?php if($this->session->userdata('login_siswa')){ ?>
			<p><span><?php echo $siswa['nis']; ?></span></p>
			<?php }else{ ?>
			<p><span><?php echo $this->session->userdata['login_wali']['no_ktp']; ?></span></p>
			<?php } ?>
			<p><span><a href="<?php echo site_url('siswa'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></span></p>
			<p><span><a href="<?php echo site_url('siswa/jadwal'); ?>"><i class="glyphicon glyphicon-list"></i> Jadwal Pelajaran</a></span></p>
			<p><span><a href="<?php echo site_url('siswa/nilai_ujian'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></span></p>
			<?php if($this->session->userdata('login_siswa')){ ?>
			<p><span><a href="<?php echo site_url('p_siswa/keluar_siswa'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span></p>
			<?php }else{ ?>
			<p><span><a href="<?php echo site_url('p_wali/keluar_wali'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span></p>
			<?php } ?>
		</div>
	</div>
</div>