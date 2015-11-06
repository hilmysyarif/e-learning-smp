<h3 class="header-isi">Biodata Wali Siswa</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open('p_siswa/ubah_data_wali'); ?>
		<h3>Ubah Data Biodata</h3>
		<div>
			<label>No KTP</label>
			<input name="no_ktp" type="text" value="<?php echo $detail_siswa['no_ktp']; ?>" readonly="readonly">
		</div>
		<div>
			<label>Password</label>
			<input name="password_wali" type="text" value="<?php echo $detail_siswa['password_wali']; ?>">
		</div>
		<div>
			<label>Nama</label>
			<input name="nama_wali" type="text" value="<?php echo $detail_siswa['nama_wali']; ?>">
		</div>
		<div>
			<label>Pekerjaan</label>
			<input name="pekerjaan" type="text" value="<?php echo $detail_siswa['pekerjaan']; ?>">
		</div>
		<div>
			<label>Email</label>
			<input name="email" type="text" value="<?php echo $detail_siswa['email']; ?>">
		</div>
		<div>
			<label>Nomer Telepon</label>
			<input name="telephone" type="text" value="<?php echo $detail_siswa['tlp']; ?>">
		</div>
		<div>
			<label>Nomer Handphone</label>
			<input name="handphone" type="text" value="<?php echo $detail_siswa['hp']; ?>">
		</div>
		<div>
			<label></label>
			<input name="ubah" type="submit" value="Ubah">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>