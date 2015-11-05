<h3 class="header-isi">Ubah Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Ubah Tahun Ajaran</h3>
		<label>Tahun Ajaran</label>
		<div class="form-ubah-data">	
			<?php foreach ($tahun_ajaran as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_tahun_ajaran?id='.$row['id_tahun_ajaran']); ?>
			<div>
				<input name="tahun_ajaran" type="text" value="<?php echo $row['tahun_ajaran']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_tahun_ajaran?id='.$row['id_tahun_ajaran']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
			</div>
			<?php echo form_close(); ?>
			<?php } //end foreach ?>
		</div>
		<a href="<?php echo site_url('admin/data_sistem'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>