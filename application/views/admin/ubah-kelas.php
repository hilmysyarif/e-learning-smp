<h3 class="header-isi">Ubah Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Ubah Kelas</h3>
		<label>Kelas</label>
		<div class="form-ubah-data">
			<?php foreach ($kelas as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_kelas?id='.$row['id_kelas']); ?>
			<div>
				<input name="kelas" type="text" value="<?php echo $row['kelas']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_kelas?id='.$row['id_kelas']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
			</div>
			<?php echo form_close(); ?>
			<?php } //end foreach ?>
		</div>
		<a href="<?php echo site_url('admin/pengaturan_data'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>