<?php //$uri = $this->uri->segment(3); ?>
<h3 class="header-isi" style="color:#6666CC;text-shadow: 0 1px 0 #6666cc;">Menu</h3>
<?php //if(empty($uri) && $this->session->userdata('login_guru')){ ?>
<?php if(empty($detail_guru) && $this->session->userdata('login_guru')){ ?>
<img src="<?php echo base_url('resource/img/photo/'.$guru['foto']) ?>" width="180px" height="190px" style="margin: 10px;">
<ul class="menu-login">
	<li><a href="<?php echo site_url('guru/upload'); ?>"><i class="glyphicon glyphicon-upload"></i> Upload Data</a></li>
	<li><a href="<?php echo site_url('guru'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></li>
	<li><a href="<?php echo site_url('guru/materi_pelajaran'); ?>"><i class="glyphicon glyphicon-file"></i> Materi Pelajaran</a></li>
	<li><a href="<?php echo site_url('guru/pengumuman'); ?>"><i class="glyphicon glyphicon-share-alt"></i> Pengumuman</a></li>
	<li><a href="<?php echo site_url('guru/nilai_ujian'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></li>
	<li><a href="<?php echo site_url('guru/pengaturan'); ?>"><i class="glyphicon glyphicon-cog"></i> Pengaturan Akun</a></li>
	<li><a href="<?php echo site_url('p_guru/keluar_guru'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></li>
</ul>
<?php //}elseif(!empty($uri) && $this->session->userdata('login_guru')){ ?>
<?php }elseif(!empty($detail_guru) && $this->session->userdata('login_guru')){ ?>
<img src="<?php echo base_url('resource/img/photo/'.$detail_guru['foto']) ?>" width="180px" height="190px" style="margin: 10px;">
<ul class="menu-login">
	<li><a href="<?php echo site_url('guru/detail_guru/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></li>
	<li><a href="<?php echo site_url('guru/materi_pelajaran/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-file"></i> Materi Pelajaran</a></li>
	<li><a href="<?php echo site_url('guru/pengumuman/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-share-alt"></i> Pengumuman</a></li>
	<li><a href="<?php echo site_url('guru/nilai_ujian/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></li>
</ul>
<?php //}elseif($this->session->userdata('login_siswa')) { ?>
<?php }elseif(!empty($detail_guru) && $this->session->userdata('login_siswa')) { ?>
<img src="<?php echo base_url('resource/img/photo/'.$detail_guru['foto']) ?>" width="180px" height="190px" style="margin: 10px;">
<ul class="menu-login">
	<li><a href="<?php echo site_url('guru/detail_guru/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-user"></i> Biodata</a></li>
	<li><a href="<?php echo site_url('guru/materi_pelajaran/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-file"></i> Materi Pelajaran</a></li>
	<li><a href="<?php echo site_url('guru/pengumuman/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-share-alt"></i> Pengumuman</a></li>
	<li><a href="<?php echo site_url('guru/nilai_ujian/'.$detail_guru['nik']); ?>"><i class="glyphicon glyphicon-list-alt"></i> Nilai Ujian</a></li>
</ul>
<?php }else{//jika tidak ada session tampil kosong ?>
<img src="<?php echo base_url('resource/img/photo/'.$detail_guru['foto']) ?>" width="180px" height="190px" style="margin: 10px;">
<?php } ?>