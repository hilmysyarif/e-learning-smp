<h3 class="header-isi">Data Hari</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Data Hari</h3>
		<?php if(!empty($hari)){ ?>
		<div class="form-ubah-data">
			<?php foreach ($hari as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_hari?id='.$row['id_hari']); ?>
			<div>
				<input name="hari" type="text" value="<?php echo $row['hari']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_hari?id='.$row['id_hari']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
			</div>
			<?php echo form_close(); ?>
			<?php } //end foreach ?>
		</div>
		<?php }else{ ?>
		<?php $this->load->view('user/notifikasi-1'); ?>
		<?php } ?>
		<a href="<?php echo site_url('admin/data_sistem'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>