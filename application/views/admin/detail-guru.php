<h3 class="header-isi">Biodata</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/ubah_data_guru?id='.$guru['nik']); ?>
	<div class="single-biodata">
		<img src="<?php echo base_url('resource/img/photo/'.$guru['foto']) ?>">
		<p style="border-top: 1px dotted #e3e3e3;"><span class="jdl-biodata">Nomer Induk Guru</span><span>: </span><input name="nik" type="text" value="<?php echo $guru['nik']; ?>" /></p>
		<p><span class="jdl-biodata">Password</span><span>: </span><input name="password" type="text" value="<?php echo $guru['password']; ?>" /></p>
		<p><span class="jdl-biodata">Nama</span><span>: </span><input name="nama" type="text" value="<?php echo $guru['nama']; ?>" /></p>
		<p><span class="jdl-biodata">Jenis Kelamin</span><span>: </span>
			<select name="jenis_kelamin">
				<option value="<?php echo $guru['jenis_kelamin']; ?>"> <?php echo $guru['jenis_kelamin']; ?></option>
				<option value="<?php echo 'Laki-laki'; ?>"> <?php echo 'Laki-laki'; ?></option>
				<option value="<?php echo 'Perempuan'; ?>"> <?php echo 'Perempuan'; ?></option>
			</select>
		</p>
		<p><span class="jdl-biodata">Email</span><span>: </span><input name="email" type="text" value="<?php echo $guru['email']; ?>" /></p>
		<p><span class="jdl-biodata">Alamat</span><span>: </span><input name="alamat" type="text" value="<?php echo $guru['alamat']; ?>" /></p>
		<p><span class="jdl-biodata">Nomer Telepon</span><span>: </span><input name="telephone" type="text" value="<?php echo $guru['tlp']; ?>" /></p>
		<p><span class="jdl-biodata">Nomer Handphone</span><span>: </span><input name="handphone" type="text" value="<?php echo $guru['hp']; ?>" /></p>
	</div>
	<div style="margin-top: 10px;">
		<input class="btn-save" name="ubah" type="submit" value="Ubah" style="margin-right: 20px;">
		<input class="btn-save" name="hapus" type="submit" value="Hapus">
	</div>
	<?php echo form_close(); ?>
</div>