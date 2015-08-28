<h3 class="header-isi">Informasi Penting</h3>
<div class="postingan">
	<?php echo form_open('p_admin/tambah_data_informasi'); ?>
	<div class="form-pengaturan">
		<div>
			<label>Judul Informasi</label>
			<input name="judul" type="text" placeholder="Judul Berita">
		</div>
		<div>
			<label>Isi Informasi</label>
			<textarea name="isi" placeholder="Isi Informasi"></textarea>
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>