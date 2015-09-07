<h3 class="header-isi">Ubah Materi Pelajaran</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/ubah_data_materi_pelajaran?id='.$detail_materi['id_materi_pelajaran']); ?>
		<h3>Ubah Materi Pelajaran</h3>
		<div>
			<label>Judul Materi</label>
			<input name="judul" value="<?php echo $detail_materi['judul']; ?>" type="text">
		</div>
		<div>
			<label>Pilih Pelajaran</label>
			<select name="pelajaran">
				<option value="<?php echo $detail_materi['id_pelajaran']; ?>"><?php echo $detail_materi['pelajaran']; ?></option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Kelas</label>
			<select name="kelas">
				<option value="<?php echo $detail_materi['id_kelas']; ?>"><?php echo $detail_materi['kelas']; ?></option>
				<?php if(!empty($kelas)) { ?>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Semester</label>
			<select name="semester">
				<option value="<?php echo $detail_materi['id_semester']; ?>"><?php echo $detail_materi['semester']; ?></option>
				<?php if(!empty($semester)) { ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"><?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select name="tahun_ajaran">
				<option value="<?php echo $detail_materi['id_tahun_ajaran'] ?>"><?php echo $detail_materi['tahun_ajaran']; ?></option>
				<?php if(!empty($tahun_ajaran)) { ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"><?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih File</label>
			<input name="file" type="file">
		</div>
		<div>
			<label></label>
			<input name="ubah" type="submit" value="Ubah">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>