<h3 class="header-isi">Data Tahun Ajaran</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Data Tahun Ajaran</h3>
		<?php if(!empty($tahun_ajaran)){ ?>
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
		<?php }else{ ?>
		<?php $this->load->view('user/notifikasi-1'); ?>
		<?php } ?>
		<a href="<?php echo site_url('admin/data_sistem'); ?>"><input type="submit" value="Kembali"></a><br /><br />
	</div>
</div>