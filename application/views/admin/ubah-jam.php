<h3 class="header-isi">Ubah Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Ubah jam</h3>
		<label>jam</label>
		<div class="form-ubah-data">
			<?php foreach ($jam as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_jam?id='.$row['id_jam']); ?>
			<div>
				<input name="jam" type="text" value="<?php echo $row['jam']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_jam?id='.$row['id_jam']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
			</div>
			<?php echo form_close(); ?>
			<?php } //end foreach ?>
		</div>
		<a href="<?php echo site_url('admin/data_sistem'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>