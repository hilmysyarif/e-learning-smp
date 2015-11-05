<h3 class="header-sidebar">Selamat Datang</h3>
<!-- form login siswa -->
<div class="form-login-sidebar">
	<img src="<?php echo base_url('resource/img/photo/'.$siswa['foto']); ?>">
	<div class="info-login-sidebar">
		<?php if($this->session->userdata('login_siswa')){ ?>
		<span><?php echo $siswa['nis']; ?></span>
		<?php }else{ ?>
		<span><?php echo $this->session->userdata['login_wali']['no_ktp']; ?></span>
		<?php } ?>

		<span><a href="<?php echo site_url('siswa'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></span>
		<span><a href="<?php echo site_url('siswa/jadwal'); ?>"><i class="glyphicon glyphicon-list"></i> Jadwal Pelajaran</a></span>
		<span><a href="<?php echo site_url('siswa/nilai_ujian'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></span>
		<?php if($this->session->userdata('login_siswa')){ ?>
		<span><a href="<?php echo site_url('p_siswa/keluar_siswa'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
		<?php }else{ ?>
		<span><a href="<?php echo site_url('p_wali/keluar_wali'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
		<?php } ?>
	</div>
</div>
