<h3 class="header-isi">Siswa</h3>
<div class="postingan">
	<?php //echo form_open('p_admin/masukkan_data_siswa'); ?>
	<?php echo form_open('p_admin/masukkan_data_siswa'); ?>
	<!-- <form method="post" action="<?php echo site_url('p_admin/masukkan_data_siswa'); ?>" enctype="multipart/form-data"> -->
	<div class="form-pengaturan">
		<h3>Masukkan Data Siswa</h3>
		<div>
			<label>Upload Foto</label>
			<input name="gambar" type="file" placeholder="Pilih Foto">
		</div>
		<div>
			<label>Nomer Induk Siswa</label>
			<input name="nis" type="text" placeholder="Nomer Induk Siswa">
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
			<input name="jenis_kelamin" type="text" placeholder="Tanggal Lahir">
		</div>
		<div>
			<label>Alamat</label>
			<input name="alamat" type="text" placeholder="Alamat">
		</div>
		<div>
			<label>Nomer KTP Orang Tua</label>
			<input name="no_ktp" type="text" placeholder="Nomer KTP Orang Tua">
		</div>
		<div>
			<label>Nama Orang Tua</label>
			<input name="nama_ortu" type="text" placeholder="Nama Orang Tua">
		</div>
		<div>
			<label>Pekerjaan Orang Tua</label>
			<input name="pekerjaan" type="text" placeholder="Pekerjaan Orang Tua">
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
	<?php //$div = '</div>'; echo form_close($div); ?>
	</form>
</div>
