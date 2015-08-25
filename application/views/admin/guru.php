<h3 class="header-isi">Guru</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/tambah_data_guru'); ?>
	<div class="form-pengaturan">
		<h3>Masukkan Data Guru</h3>
		<div>
			<label>Foto</label>
			<input name="foto" type="file">
		</div>
		<div>
			<label>Nomer Induk Guru</label>
			<input name="nik" type="text" placeholder="Nomer Induk Guru">
		</div>
		<div>
			<label>Password</label>
			<input name="password" type="text" placeholder="Password">
		</div>
		<div>
			<label>Nama</label>
			<input name="nama" type="text" placeholder="Nama">
		</div>
		<div>
			<label>Tempat Lahir</label>
			<input name="tempat_lahir" type="text" placeholder="Tempat Lahir">
		</div>
		<div>
			<label>Tanggal Lahir</label>
			<input name="tgl_lahir" type="text" placeholder="Tanggal Lahir">
		</div>
		<div>
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin">
				<option value="<?php echo 'Laki-laki'; ?>"> <?php echo 'Laki-laki'; ?></option>
				<option value="<?php echo 'Perempuan'; ?>"> <?php echo 'Perempuan'; ?></option>
			</select>
		</div>
		<div>
			<label>Alamat</label>
			<input name="alamat" type="text" placeholder="Alamat">
		</div>
		<div>
			<label>Email</label>
			<input name="email" type="text" placeholder="Email">
		</div>
		<div>
			<label>Nomer Telepon</label>
			<input name="telepon" type="text" placeholder="Nomer Telepon">
		</div>
		<div>
			<label>Nomer Handphone</label>
			<input name="handphone" type="text" placeholder="Nomer Handphone">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>