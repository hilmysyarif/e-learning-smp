<h3 class="header-isi">Biodata Siswa</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<?php echo form_open_multipart('p_siswa/ubah_foto_biodata'); ?>
		<h3>Ubah Foto Biodata</h3>
		<div>
			<label>Ubah Foto</label>
			<input name="foto" type="file">
		</div>
		<div>
			<label></label>
			<input name="ubah" type="submit" value="Ubah">
		</div>
		<?php echo form_close(); ?>
	</div>
	
	<div class="form-pengaturan">
		<?php echo form_open('p_siswa/ubah_data_siswa'); ?>
		<h3>Ubah Data Biodata</h3>
		<div>
			<label>No Induk</label>
			<input name="nis" type="text" value="<?php echo $detail_siswa['nis']; ?>" readonly="readonly">
		</div>
		<div>
			<label>Password</label>
			<input name="password_siswa" type="password" value="<?php echo $detail_siswa['password_siswa']; ?>">
		</div>
		<div>
			<label>Nama</label>
			<input name="nama" type="text" value="<?php echo $detail_siswa['nama']; ?>">
		</div>
		<div>
			<label>Tempat Lahir</label>
			<input name="tempat_lahir" type="text" value="<?php echo $detail_siswa['tempat_lahir']; ?>">
		</div>
		<div>
			<label>Tanggal Lahir</label>
			<input name="tgl_lahir" type="text" value="<?php echo $detail_siswa['tgl_lahir']; ?>">
		</div>
		<div>
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin">
				<option value="<?php echo $detail_siswa['jenis_kelamin']; ?>"><?php echo $detail_siswa['jenis_kelamin']; ?></option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
		</div>
		<div>
			<label>Alamat</label>
			<textarea name="alamat"><?php echo $detail_siswa['alamat']; ?></textarea>
		</div>
		<div>
			<label>Nama Orang Tua</label>
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