<h3 class="header-isi">Pengaturan Akun</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_admin/ubah_foto_admin?id='.$admin['email']) ?>
		<h3>Ubah Foto</h3>
		<div>
			<label>Ubah Foto</label>
			<input name="foto" type="file" placeholder="Pilih Foto">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="form-pengaturan">
		<?php echo form_open('p_admin/ubah_email_admin'); ?>
		<h3>Ubah Email</h3>
		<div>
			<label>Email</label>
			<input name="email" type="email" placeholder="Email">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="form-pengaturan">
		<?php echo form_open('p_admin/ubah_password_admin?id='.$admin['email']); ?>
		<h3>Ubah Password</h3>
		<div>
			<label>Password Lama</label>
			<input name="password_lama" type="text" placeholder="Password Lama">
		</div>
		<div>
			<label>Password Baru</label>
			<input name="password_baru" type="text" placeholder="Password Baru">
		</div>
		<div>
			<label>Ulangi Password Baru</label>
			<input name="password_konfirmasi" type="text" placeholder="Ulangi Password Baru">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>