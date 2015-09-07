<h3 class="header-isi">Ubah Nilai Ujian</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/ubah_data_nilai?id='.$detail_nilai['id_data_nilai']); ?>
		<h3>Ubah Nilai Ujian</h3>
		<div>
			<label>Judul Materi</label>
			<input name="judul" value="<?php echo $detail_nilai['judul']; ?>" type="text">
		</div>
		<div>
			<label>Pilih Semester</label>
			<select name="semester">
				<option value="<?php echo $detail_nilai['id_semester']; ?>"><?php echo $detail_nilai['semester']; ?></option>
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
				<option value="<?php echo $detail_nilai['id_tahun_ajaran'] ?>"><?php echo $detail_nilai['tahun_ajaran']; ?></option>
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