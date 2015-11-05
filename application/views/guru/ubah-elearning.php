<h3 class="header-isi">Ubah E-Learning</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/ubah_data_elearning?id='.$detail_elearning['id_materi_umum']); ?>
		<h3>Ubah Materi Pelajaran</h3>
		<div>
			<label>Judul Materi</label>
			<input name="judul" value="<?php echo $detail_elearning['judul']; ?>" type="text">
		</div>
		<div>
			<label>Pilih Pelajaran</label>
			<select name="pelajaran">
				<option value="<?php echo $detail_elearning['id_pelajaran']; ?>"><?php echo $detail_elearning['pelajaran']; ?></option>
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