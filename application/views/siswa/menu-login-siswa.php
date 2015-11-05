<h3 class="header-isi" style="color:#6666CC;text-shadow: 0 1px 0 #6666cc;">Menu</h3>
<img src="<?php echo base_url('resource/img/photo/'.$siswa['foto']) ?>" width="180px" height="190px" style="margin: 10px;">
<ul class="menu-login">
	<?php if($this->session->userdata('login_siswa')){ ?>
	<li><a href="<?php echo site_url('siswa'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></li>
	<li><a href="<?php echo site_url('siswa/jadwal'); ?>"><i class="glyphicon glyphicon-list"></i> Jadwal Pelajaran</a></li>
	<li><a href="<?php echo site_url('siswa/nilai_ujian'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></li>
	<li><a href="<?php echo site_url('siswa/ubah_biodata'); ?>"><i class="glyphicon glyphicon-edit"></i> Ubah Biodata</a></li>
	<li><a href="<?php echo site_url('p_siswa/keluar_siswa'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></li>
	<?php }else{ ?>
	<li><a href="<?php echo site_url('siswa'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></li>
	<li><a href="<?php echo site_url('siswa/jadwal'); ?>"><i class="glyphicon glyphicon-list"></i> Jadwal Pelajaran</a></li>
	<li><a href="<?php echo site_url('siswa/nilai_ujian'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></li>
	<li><a href="<?php echo site_url('siswa/ubah_biodata_wali'); ?>"><i class="glyphicon glyphicon-edit"></i> Ubah Biodata</a></li>
	<li><a href="<?php echo site_url('p_wali/keluar_wali'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></li>
	<?php } ?>
</ul>