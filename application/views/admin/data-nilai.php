<h3 class="header-isi">Data Nilai</h3>
<div class="postingan">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#data_nilai" data-toggle="tab">Data Nilai</a></li>
	  <li><a href="#masukkan_data_nilai" data-toggle="tab">Masukkan Data Nilai</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- nilai -->
	  <div class="tab-pane active" id="data_nilai">
		<?php echo form_open('p_admin/tampil_data_nilai_siswa'); ?>
		<div class="form-tampil-nilai" style="margin-top: 15px;">
			<select name="pelajaran" style="width:160px;">
				<option value="">Pilih Pelajaran</option>
				<?php if(!empty($pelajaran)) { ?>
				<?php foreach ($pelajaran as $row) { ?>
				<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
			<select name="kelas" style="width:160px;">
				<option value="">Pilih Kelas</option>
				<?php if(!empty($kelas)) { ?>
				<?php foreach ($kelas as $row) { ?>
				<option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['kelas']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
			<select name="semester" style="width:160px;">
				<option value="">Pilih Semester</option>
				<?php if(!empty($semester)) { ?>
				<?php foreach ($semester as $row) { ?>
				<option value="<?php echo $row['id_semester']; ?>"><?php echo $row['semester']; ?></option>
				<?php }//end foreach ?>
				<?php }else{ ?>
				<option selected="1"><?php echo 'Data Kosong'; ?></option>
				<?php } ?>
			</select>
			<select name="tahun_ajaran" style="width:190px;">
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

		<?php if(!empty($nilai)){ ?>
		<div class="isi-postingan">
			<?php echo form_open('p_admin/ubah_data_nilai_siswa'); ?>
			<h2 style="text-align: left;">Nilai<span><input name="pelajaran" value="<?php echo $nama_pelajaran['id_pelajaran']; ?>" type="text" style="display: none;"> <?php echo $nama_pelajaran['pelajaran']; ?></span> | Kelas<span><input name="kelas" value="<?php echo $nama_kelas['id_kelas']; ?>" type="text" style="display: none;"> <?php echo $nama_kelas['kelas']; ?></span> | Semester<span><input name="semester" value="<?php echo $nama_semester['id_semester']; ?>" type="text" style="display: none;"> <?php echo $nama_semester['semester']; ?></span> | Tahun Ajaran<span><input name="tahun_ajaran" value="<?php echo $nama_tahun_ajaran['id_tahun_ajaran']; ?>" type="text" style="display: none;"> <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span><a href="<?php echo site_url('p_admin/hapus_nilai?pelajaran='.$nama_pelajaran['id_pelajaran'].'&kelas='.$nama_kelas['id_kelas'].'&semester='.$nama_semester['id_semester'].'&tahun_ajaran='.$nama_tahun_ajaran['id_tahun_ajaran']); ?>"><i class="glyphicon glyphicon-trash pull-right"></i></a></h2>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="kolom-nis">Nomer Induk Siswa</th>
						<th class="kolom-nm-siswa">Nama Siswa</th>
						<th class="kolom-nilai-siswa">Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach ($nilai as $row) { ?>
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
			<?php $this->load->view('user/data-kosong'); ?>
		<?php } ?>
	  </div>

	  <!-- masukkan data nilai -->
	  <div class="tab-pane" id="masukkan_data_nilai">
	  	<?php echo form_open('p_admin/tampil_data_siswa'); ?>
		<div class="form-tampil-nilai" style="margin-top: 15px;">
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
			<?php echo form_open('p_admin/tambah_data_nilai_siswa'); ?>
			<h2 style="text-align: left;">Kelas<span><input name="kelas" value="<?php echo $nama_kelas['id_kelas']; ?>" type="text" style="display: none;"> <?php echo $nama_kelas['kelas']; ?></span> | Semester<span><input name="semester" value="<?php echo $nama_semester['id_semester']; ?>" type="text" style="display: none;"> <?php echo $nama_semester['semester']; ?></span> | Tahun Ajaran<span><input name="tahun_ajaran" value="<?php echo $nama_tahun_ajaran['id_tahun_ajaran']; ?>" type="text" style="display: none;"> <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span></h2>
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
						<td class="kolom-nilai-siswa"><input name="nilai_<?php echo $i; ?>" type="text" value=""></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>
			<div>
				<input name="total_data" type="text" value="<?php echo $total_data; ?>" style="display: none;">
				<select name="pelajaran">
					<?php if(!empty($pelajaran)) { ?>
					<?php foreach ($pelajaran as $row) { ?>
					<option value="<?php echo $row['id_pelajaran']; ?>"><?php echo $row['pelajaran']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
				<input name="simpan" type="submit" value="Simpan" class="btn-save pull-right" style="padding: 10px 40px;">
			</div>
			<?php echo form_close(); ?>
		</div>
		<?php }else{ ?>
		<?php echo 'Data Kosong'; ?>
		<?php } ?>
	  </div>
	  
	</div>

</div>


