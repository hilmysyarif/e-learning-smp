<h3 class="header-isi">Data Semester</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Data Semester</h3>
		<?php if(!empty($semester)){ ?>
		<div class="form-ubah-data">
			<?php foreach ($semester as $row) { ?>
			<?php echo form_open('p_admin/ubah_data_semester?id='.$row['id_semester']); ?>
			<div>
				<input name="semester" type="text" value="<?php echo $row['semester']; ?>">
				<input name="ubah" type="submit" value="Ubah">
				<input name="hapus" type="submit" value="Hapus">
				<!-- <a href="<?php echo site_url('p_admin/hapus_data_semester?id='.$row['id_semester']); ?>"><i class="glyphicon glyphicon-trash"></i> Hapus</a> -->
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