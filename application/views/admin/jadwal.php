<h3 class="header-isi">Jadwal Pelajaran</h3>
<div class="postingan">
	<div class="form-pengaturan">
	<?php echo form_open('p_admin/tambah_data_jadwal'); ?>
		<h3>Tambah Jadwal Pelajaran</h3>
		<div>
			<label>Pilih Kelas</label>
			<select name="kelas">
				<option value="">Pilih Kelas</option>
				<?php if(!empty($kelas)) { ?>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Semester</label>
			<select name="semester">
				<option value="">Pilih Semester</option>
				<?php if(!empty($semester)) { ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"><?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select name="tahun_ajaran">
				<option value="">Pilih Tahun Ajaran</option>
				<?php if(!empty($tahun_ajaran)) { ?>
				<?php foreach ($tahun_ajaran as $row) { ?>
				<option value="<?php echo $row['id_tahun_ajaran']; ?>"><?php echo $row['tahun_ajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<!-- Hari Ke-1 -->
		<div style="background-color: #f3f3f3;">
			<label>Pilih Hari</label>
			<select name="hari">
				<option value="">Pilih Hari</option>
				<?php if(!empty($hari)) { ?>
				<?php foreach ($hari as $row) { ?>
				<option value="<?php echo $row['id_hari']; ?>"><?php echo $row['hari']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>


		<?php for ($i=1; $i<=7; $i++) { ?>
		<div>
			<label>Jam <?php echo $i; ?></label>
			<select name="jam_<?php echo $i; ?>">
				<option value="">Pilih Jam <?php echo $i; ?></option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_<?php echo $i; ?>">
				<option value="">Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_<?php echo $i; ?>">
				<option value="">Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_<?php echo $i; ?>">
				<option value="">Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<?php }//end for ?>






		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 2</label>
			<select name="jam_2">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_2">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_2">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_2">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 3</label>
			<select name="jam_3">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_3">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_3">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_3">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 4</label>
			<select name="jam_4">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_4">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_4">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_4">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 5</label>
			<select name="jam_5">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_5">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_5">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_5">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 6</label>
			<select name="jam_6">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_6">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_6">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_6">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->
		<!-- <div style="border-top: solid 3px #e3e3e3;">
			<label>Jam 7</label>
			<select name="jam_7">
				<option>Pilih Jam</option>
				<?php if(!empty($jam)) { ?>
				<?php foreach ($jam as $row) { ?>
				<option value="<?php echo $row['id_jam']; ?>"><?php echo $row['jam']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Pelajaran</label>
			<select name="pelajaran_7">
				<option>Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Ruang</label>
			<select name="ruang_7">
				<option>Pilih Ruang</option>
				<?php if(!empty($ruang)) { ?>
				<?php foreach ($ruang as $row) { ?>
				<option value="<?php echo $row['id_ruang']; ?>"><?php echo $row['ruang']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div>
		<div>
			<label>Guru</label>
			<select name="guru_7">
				<option>Pilih Guru</option>
				<?php if(!empty($guru)) { ?>
				<?php foreach ($guru as $row) { ?>
				<option value="<?php echo $row['nik']; ?>"><?php echo $row['nama']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
		</div> -->
		<!--  -->

		<!-- submit -->
		<div>
			<label></label>
			<input name="tambah" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
</div>