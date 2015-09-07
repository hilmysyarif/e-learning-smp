<h3 class="header-isi">Nilai</h3>
<div class="postingan">
	<div class="form-tampil-nilai">
		<?php echo form_open('p_admin/tampil_data_nilai_siswa'); ?>
		<select name="pelajaran">
			<option value="">Pilih Pelajaran</option>
			<?php if(!empty($pelajaran)) { ?>
			<?php foreach ($pelajaran as $row) { ?>
			<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
			<?php }//end foreach ?>
			<?php }else{ ?>
			<option selected="1"><?php echo 'Data Kosong'; ?></option>
			<?php } ?>
		</select>
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
		<input name="tampilkan" type="submit" value="Tampilkan">
		<?php echo form_close(); ?>
	</div>

	<?php if(!empty($siswa)){ ?>
	<div class="isi-postingan">
		<?php echo form_open('p_admin/ubah_data_nilai_siswa'); ?>
		<h2 style="text-align: left;">Nilai<span><input name="pelajaran" value="<?php echo $nama_pelajaran['id_pelajaran']; ?>" type="text" style="display: none;"> <?php echo $nama_pelajaran['pelajaran']; ?></span> | Kelas<span><input name="kelas" value="<?php echo $nama_kelas['id_kelas']; ?>" type="text" style="display: none;"> <?php echo $nama_kelas['kelas']; ?></span> | Semester<span><input name="semester" value="<?php echo $nama_semester['id_semester']; ?>" type="text" style="display: none;"> <?php echo $nama_semester['semester']; ?></span> | Tahun Ajaran<span><input name="tahun_ajaran" value="<?php echo $nama_tahun_ajaran['id_tahun_ajaran']; ?>" type="text" style="display: none;"> <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span></h2>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th class="kolom-nis">Nomer Induk Siswa</th>
					<th class="kolom-nm-siswa">Nama Siswa</th>
					<th class="kolom-nilai-siswa">Nilai</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach ($siswa as $row) { ?>
				<tr>
					<td class="kolom-nis"><input name="nis_<?php echo $i; ?>" value="<?php echo $row['nis']; ?>" type="text" style="display: none;"><?php echo $row['nis']; ?></td>
					<td class="kolom-nm-siswa"><?php echo $row['nama']; ?></td>
					<td class="kolom-nilai-siswa"><input name="nilai_<?php echo $i; ?>" type="text" value="<?php echo $row['nilai']; ?>" style="text-align: center;"></td>
				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
		<div>
			<input name="total_data" type="text" value="<?php echo $total_data; ?>" style="display: none;">
			<input name="simpan" type="submit" value="Simpan" class="btn-save pull-right" style="padding: 10px 40px;">
		</div>
		<?php echo form_close(); ?>
	</div>
	<?php }else{ ?>
	<?php echo 'Data Kosong'; ?>
	<?php } ?>
</div>