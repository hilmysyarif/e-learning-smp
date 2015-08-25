<h3 class="header-isi">Siswa</h3>
<div class="postingan">
	<?php echo form_open_multipart('p_admin/tambah_data_siswa'); ?>
	<div class="form-pengaturan">
		<h3>Masukkan Data Siswa</h3>
		<div>
			<label>Upload Foto</label>
			<input name="foto" type="file">
		</div>
		<div>
			<label>Tahun Masuk</label>
			<select name="tahun_masuk">
				<?php if(!empty($tahun_ajaran)){ ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['tahun_ajaran']; ?>"> <?php echo $tahun; ?></option>
				<?php } ?>
			</select>
		</div>
		<!-- <div>
			<label>Nomer Induk Siswa</label>
			<input name="nis" value="<?php if(!empty($nis)){echo $nis;} ?>" type="text" placeholder="Nomer Induk Siswa">
		</div>
		<div>
			<label>Password</label>
			<input name="password" value="<?php if(!empty($password)){echo $password;} ?>" type="text" placeholder="Password">
		</div> -->
		<div>
			<label>Kelas</label>
			<select name="kelas">
				<?php if(!empty($kelas)){ ?>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_kelas']; ?>"> <?php echo $kelas; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Semester</label>
			<select name="semester">
				<?php if(!empty($semester)){ ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_semester']; ?>"> <?php echo $semester; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Tahun Ajaran</label>
			<select name="tahun_ajaran">
				<?php if(!empty($tahun_ajaran)){ ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"> <?php echo $tahun; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Nama</label>
			<input name="nama" value="<?php if(!empty($nama)){echo $nama;} ?>" type="text" placeholder="Nama">
		</div>
		<div>
			<label>Tempat Lahir</label>
			<input name="tempat_lahir" value="<?php if(!empty($tempat_lahir)){echo $tempat_lahir;} ?>" type="text" placeholder="Tempat Lahir">
		</div>
		<div>
			<label>Tanggal Lahir</label>
			<input name="tgl_lahir" value="<?php if(!empty($tgl_lahir)){echo $tgl_lahir;} ?>" type="text" placeholder="Tanggal Lahir">
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
			<input name="alamat" value="<?php if(!empty($alamat)){echo $alamat;} ?>" type="text" placeholder="Alamat">
		</div>
		<div>
			<label>Nomer KTP Orang Tua</label>
			<input name="no_ktp" value="<?php if(!empty($no_ktp)){echo $no_ktp;} ?>" type="text" placeholder="Nomer KTP Orang Tua">
		</div>
		<div>
			<label>Nama Orang Tua</label>
			<input name="nama_wali" value="<?php if(!empty($nama)){echo $nama;} ?>" type="text" placeholder="Nama Orang Tua">
		</div>
		<div>
			<label>Pekerjaan Orang Tua</label>
			<input name="pekerjaan" value="<?php if(!empty($pekerjaan)){echo $pekerjaan;} ?>" type="text" placeholder="Pekerjaan Orang Tua">
		</div>
		<div>
			<label>Email</label>
			<input name="email" value="<?php if(!empty($email)){echo $email;} ?>" type="text" placeholder="Email">
		</div>
		<div>
			<label>Nomer Telepon</label>
			<input name="telepon" value="<?php if(!empty($tlp)){echo $tlp;} ?>" type="text" placeholder="Nomer Telepon">
		</div>
		<div>
			<label>Nomer Handphone</label>
			<input name="handphone" value="<?php if(!empty($hp)){echo $hp;} ?>" type="text" placeholder="Nomer Handphone">
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
