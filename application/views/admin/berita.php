<h3 class="header-isi">Berita Terbaru</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/tambah_data_berita'); ?>
	<div class="form-pengaturan">
		<div>
			<label>Gambar Thumbnail</label>
			<input name="gambar" type="file">
		</div>
		<div>
			<label>Judul Berita</label>
			<input name="judul" type="text" placeholder="Judul Berita">
		</div>
		<div>
			<label>Isi Berita</label>
			<textarea name="isi" placeholder="Isi Berita"></textarea>
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>