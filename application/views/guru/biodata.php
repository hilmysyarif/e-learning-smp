<h3 class="header-isi">Biodata</h3>
<div class="postingan">
	<div class="single-biodata">
		<!-- <img src="<?php echo base_url('resource/img/photo/'.$guru['foto']) ?>"> -->
		<p><span class="jdl-biodata" style="padding:0;">Nomer Induk Guru</span><span>: </span><span><?php echo $guru['nik']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Nama</span><span>: </span><span><?php echo $guru['nama']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Nama</span><span>: </span><span><?php echo $guru['jenis_kelamin']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Tempat Tanggal lahir</span><span>: </span><span><?php echo $guru['tempat_lahir'].', '.$guru['tgl_lahir']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Alamat</span><span>: </span><span><?php echo $guru['alamat']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Email</span><span>: </span><span><?php echo $guru['email']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Nomer Telepon</span><span>: </span><span><?php echo $guru['tlp']; ?></span></p>
		<p><span class="jdl-biodata" style="padding:0;">Nomer Handphone</span><span>: </span><span><?php echo $guru['hp']; ?></span></p>
	</div>
</div>