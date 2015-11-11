<h3 class="header-isi">Pengaturan</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_guru/ubah_foto_guru?id='.$guru['nik']) ?>
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
		<?php echo form_open('p_guru/ubah_data_guru?id='.$guru['nik']); ?>
		<h3>Ubah Biodata</h3>
		<div>
			<label>Nomer Induk Guru</label>
			<input name="nik" value="<?php echo $guru['nik']; ?>" type="text" readonly="readonly">
		</div>
		<div>
			<label>Nama</label>
			<input name="nama" value="<?php echo $guru['nama']; ?>" type="text">
		</div>
		<div>
			<label>Tempat Lahir</label>
			<input name="tempat_lahir" value="<?php echo $guru['tempat_lahir']; ?>" type="text">
		</div>
		<div>
			<label>Tanggal Lahir</label>
			<input name="tgl_lahir" value="<?php echo $guru['tgl_lahir']; ?>" type="text">
		</div>
		<div>
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin">
				<option value="<?php echo $guru['jenis_kelamin']; ?>"> <?php echo $guru['jenis_kelamin']; ?></option>
				<option value="<?php echo 'Laki-laki'; ?>"> <?php echo 'Laki-laki'; ?></option>
				<option value="<?php echo 'Perempuan'; ?>"> <?php echo 'Perempuan'; ?></option>
			</select>
		</div>
		<div>
			<label>Alamat</label>
			<input name="alamat" value="<?php echo $guru['alamat']; ?>" type="text">
		</div>
		<div>
			<label>Email</label>
			<input name="email" value="<?php echo $guru['email']; ?>" type="text">
		</div>
		<div>
			<label>Nomer Telepon</label>
			<input name="telephone" value="<?php echo $guru['tlp']; ?>" type="text">
		</div>
		<div>
			<label>Nomer Handphone</label>
			<input name="handphone" value="<?php echo $guru['hp']; ?>" type="text">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>

	<div class="form-pengaturan">
		<?php echo form_open('p_guru/ubah_password_guru?id='.$guru['nik']); ?>
		<h3>Ubah Password</h3>
		<div>
			<label>Password Lama</label>
			<input name="password_lama" type="password" placeholder="Password Lama">
		</div>
		<div>
			<label>Password Baru</label>
			<input name="password_baru" type="password" placeholder="Password Baru">
		</div>
		<div>
			<label>Ulangi Password Baru</label>
			<input name="password_konfirmasi" type="password" placeholder="Ulangi Password Baru">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>