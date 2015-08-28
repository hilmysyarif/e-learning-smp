<h3 class="header-isi">Informasi Penting</h3>
<div class="postingan">
	<?php echo form_open('p_admin/ubah_data_informasi/'.$informasi['id']); ?>
	<div class="form-pengaturan">
		<div>
			<label>Judul Informasi</label>
			<input name="judul" value="<?php echo $informasi['judul']; ?>" type="text">
		</div>
		<div>
			<label>Isi Informasi</label>
			<textarea name="isi"><?php echo $informasi['isi']; ?></textarea>
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>