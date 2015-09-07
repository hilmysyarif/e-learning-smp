<h3 class="header-isi">Upload Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/tambah_data_materi?id='.$guru['nik']); ?>
		<h3>Upload Materi Pelajaran</h3>
		<div>
			<label>Judul Materi</label>
			<input name="judul" type="text" placeholder="Judul Materi">
		</div>
		<div>
			<label>Pilih Pelajaran</label>
			<select name="pelajaran">
				<?php if(!empty($pelajaran)){ ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"> <?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"> <?php echo $pelajaran; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Kelas</label>
			<select name="kelas">
				<?php if(!empty($kelas)){ ?>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_kelas']; ?>"> <?php echo $kelas; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Semester</label>
			<select name="semester">
				<?php if(!empty($semester)){ ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $semester; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select name="tahun_ajaran">
				<?php if(!empty($tahun_ajaran)){ ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $tahun_ajaran; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih File</label>
			<input name="file" type="file" placeholder="Pilih Foto">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Upload">
		</div>
		<?php echo form_close(); ?>
	</div>

	<div class="form-pengaturan">
		<?php echo form_open('p_guru/tambah_data_pengumuman?id='.$guru['nik']); ?>
		<h3>Tulis Pengumuman</h3>
		<div>
			<label>Isi Pengumuman</label>
			<textarea name="pengumuman" class="" placeholder="Tulis disini..."><?php echo $guru['pengumuman']; ?></textarea>
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/tambah_data_nilai?id='.$guru['nik']); ?>
		<h3>Upload Nilai Ujian</h3>
		<div>
			<label>Judul Materi</label>
			<input name="judul" type="text" placeholder="Judul Materi">
		</div>
		<div>
			<label>Pilih Semester</label>
			<select name="semester">
				<?php if(!empty($semester)){ ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $semester; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select name="tahun_ajaran">
				<?php if(!empty($tahun_ajaran)){ ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $tahun_ajaran; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih File</label>
			<input name="file" type="file">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Upload">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>