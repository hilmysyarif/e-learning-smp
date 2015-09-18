<h3 class="header-isi">Tentang Kami</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open('p_admin/ubah_data_tentang_kami?id=1'); ?>
		<div>
			<label>Isi Tentang Kami</label>
			<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $tentang_kami['isi']; ?></textarea>
		</div>
		<div>
			<!-- <label></label> -->
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>