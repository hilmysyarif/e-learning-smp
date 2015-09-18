<h3 class="header-isi">Kontak</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open('p_admin/ubah_data_kontak?id=2') ?>
		<div>
			<label>Isi Kontak</label>
			<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $kontak['isi']; ?></textarea>
		</div>
		<div>
			<!-- <label></label> -->
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>