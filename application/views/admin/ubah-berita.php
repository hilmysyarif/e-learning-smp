<h3 class="header-isi">Ubah Berita</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/ubah_data_berita/'.$berita['id']); ?>
	<div class="form-pengaturan">
		<div style="border-top: none; margin-top: 15px;">
			<label>Gambar Thumbnail</label>
			<input name="gambar" value="<?php echo $berita['gambar']; ?>" type="file">
			<img src="<?php echo base_url('resource/img/images/'.$berita['gambar']); ?>">
		</div>
		<div>
			<label>Judul Berita</label>
			<input name="judul" type="text" value="<?php echo $berita['judul']; ?>" placeholder="Judul Berita">
		</div>
		<div>
			<label>Isi Berita</label>
			<textarea class="ckeditor" name="isi" placeholder="Isi Berita"><?php echo $berita['isi']; ?></textarea>
		</div>
		<div style="border-top: none;">
			<!-- <label></label> -->
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>