<nav>
	<ul class="nav-long">
		<li><a href="<?php echo site_url('user'); ?>">Beranda</a></li>
		<!-- <li><a href="<?php echo site_url('user/psb'); ?>">PSB</a></li> -->
		<li><a href="<?php echo site_url('user/guru'); ?>">Guru</a></li>
		<li>
			<a href="#" id="nav-child">Akademik</a>
			<ul>
				<li><a href="<?php echo site_url('user/e_learning'); ?>">E-learning</a></li>
				<li><a href="<?php echo site_url('user/informasi'); ?>">Informasi Siswa</a></li>
				<li><a href="<?php echo site_url('user/jadwal_pelajaran'); ?>">Jadwal Pelajaran</a></li>
			</ul>
		</li>
		<!-- <li><a href="<?php echo site_url('user/fasilitas'); ?>">Fasilitas</a></li> -->
		<li>
			<a href="#">Tentang Kami</a>
			<ul>
				<li><a href="<?php echo site_url('user/sejarah'); ?>">Sejarah</a></li>
				<li><a href="<?php echo site_url('user/visi_misi'); ?>">Visi & Misi</a></li>
			</ul>
		</li>
		<li><a href="<?php echo site_url('user/kontak'); ?>">Hubungi Kami</a></li>
		<!-- <li><a href="<?php echo site_url('user/download'); ?>">Download</a></li> -->
	</ul>
</nav>
 <!-- class="nav-long-active" -->