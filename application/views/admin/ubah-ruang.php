<h3 class="header-isi">Ubah Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Ubah Ruang</h3>
		<label>Ruang</label>
		<div class="form-ubah-data">
			<?php foreach ($ruang as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_ruang?id='.$row['id_ruang']); ?>
			<div>
				<input name="ruang" type="text" value="<?php echo $row['ruang']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_ruang?id='.$row['id_ruang']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
			</div>
			<?php echo form_close(); ?>
			<?php } //end foreach ?>
		</div>
		<a href="<?php echo site_url('admin/data_sistem'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>