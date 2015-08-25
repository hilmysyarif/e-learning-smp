<h3 class="header-isi">Biodata</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/ubah_data_siswa?id='.$siswa['nis']); ?>
	<div class="single-biodata">
		<img src="<?php echo base_url('resource/img/photo/'.$siswa['foto']) ?>">
		<p style="border-top: 1px dotted #e3e3e3;"><span class="jdl-biodata">Tahun Masuk</span><span>: </span>
			<select name="tahun_masuk">
				<option value="<?php echo $siswa['tahun_masuk']; ?>"> <?php echo $siswa['tahun_masuk']; ?></option>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
			</select>
		</p>
		<!-- <p><span class="jdl-biodata">Ubah Foto</span><span>: </span>
			<input name="foto" type="file" value="<?php echo $siswa['foto']; ?>">
		</p> -->
		<p><span class="jdl-biodata">Kelas</span><span>: </span>
			<select name="kelas">
				<option value="<?php echo $siswa['id_kelas']; ?>"> <?php echo $siswa['kelas']; ?></option>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
			</select>
		</p>
		<p><span class="jdl-biodata">Semester</span><span>: </span>
			<select name="semester">
				<option value="<?php echo $siswa['id_semester']; ?>"> <?php echo $siswa['semester']; ?></option>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
			</select>
		</p>
		<p><span class="jdl-biodata">Tahun Ajaran</span><span>: </span>
			<select name="tahun_ajaran">
				<option value="<?php echo $siswa['id_tahun_ajaran']; ?>"> <?php echo $siswa['tahun_ajaran']; ?></option>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
			</select>
		</p>
		<p><span class="jdl-biodata">Nomer Induk Siswa</span><span>: </span><input name="nis" type="text" value="<?php echo $siswa['nis']; ?>"></p>
		<p><span class="jdl-biodata">Nama</span><span>: </span><input name="nama" type="text" value="<?php echo $siswa['nama']; ?>"></p>
		<p><span class="jdl-biodata">Tempat Lahir</span><span>: </span><input name="tempat_lahir" type="text" value="<?php echo $siswa['tempat_lahir']; ?>"></p>
		<p><span class="jdl-biodata">Tanggal Lahir</span><span>: </span><input name="tgl_lahir" type="text" value="<?php echo $siswa['tgl_lahir']; ?>"></p>
		<p><span class="jdl-biodata">Jenis Kelamin</span><span>: </span><input name="jenis_kelamin" type="text" value="<?php echo $siswa['jenis_kelamin']; ?>"></p>
		<p><span class="jdl-biodata">Alamat</span><span>: </span><input name="alamat" type="text" value="<?php echo $siswa['alamat']; ?>"></p>
		<p><span class="jdl-biodata">Nomer KTP Orang Tua</span><span>: </span><input name="no_ktp" type="text" value="<?php echo $siswa['no_ktp']; ?>"></p>
		<p><span class="jdl-biodata">Nama Orang Tua</span><span>: </span><input name="nama_wali" type="text" value="<?php echo $siswa['nama_wali']; ?>"></p>
		<p><span class="jdl-biodata">Pekerjaan Orang Tua</span><span>: </span><input name="pekerjaan" type="text" value="<?php echo $siswa['pekerjaan']; ?>"></p>
		<p><span class="jdl-biodata">Email</span><span>: </span><input name="email" type="text" value="<?php echo $siswa['email']; ?>"></p>
		<p><span class="jdl-biodata">Nomer Telepon</span><span>: </span><input name="telephone" type="text" value="<?php echo $siswa['tlp']; ?>"></p>
		<p><span class="jdl-biodata">Nomer Handphone</span><span>: </span><input name="handphone" type="text" value="<?php echo $siswa['hp']; ?>"></p>
	</div>
	<div style="margin-top: 10px;">
		<input class="btn-save" name="ubah" type="submit" value="Ubah" style="margin-right: 20px;">
		<input class="btn-save" name="hapus" type="submit" value="Hapus">
	</div>
	<?php echo form_close(); ?>
</div>