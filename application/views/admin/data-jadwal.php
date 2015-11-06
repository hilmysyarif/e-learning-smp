<h3 class="header-isi">Data Jadwal</h3>
<div class="postingan">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#data_jadwal" data-toggle="tab">Data Jadwal</a></li>
	  <li><a href="#masukkan_data_jadwal" data-toggle="tab">Masukkan Data Jadwal</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- jadwal -->
	  <div class="tab-pane active" id="data_jadwal">
		<?php echo form_open('p_admin/tampil_data_jadwal'); ?>
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
		<?php if(!empty($jadwal)){ ?>
		<div class="isi-postingan">
			<h2 style="text-align: left;"><span>Jadwal Pelajaran Kelas <?php echo $nama_kelas['kelas']; ?> | Semester <?php echo $nama_semester['semester']; ?> | Tahun Ajaran <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span><a href="<?php echo site_url('p_admin/hapus_jadwal?kelas='.$nama_kelas['id_kelas'].'&semester='.$nama_semester['id_semester'].'&tahun_ajaran='.$nama_tahun_ajaran['id_tahun_ajaran']); ?>"><i class="glyphicon glyphicon-trash pull-right"></i></a></h2>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="width: 33px;"><span class="">No</span></th>
						<th style="width: 100px;"><span class="">Hari</span></th>
						<th style="width: 180px;"><span class="">Jam</span></th>
						<th style="width: 130px;"><span class="">Ruang</span></th>
						<!-- <th style="width: 100px;"><span class="">Kelas</span></th> -->
						<th style="width: 250px;"><span class="">Pelajaran</span></th>
						<th style="width: 200px;"><span class="">Guru</span></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach ($jadwal as $row) { ?>
					<tr>
						<td style="width: 33px;"><span class=""><?php echo $i; ?></span></td>
						<td style="width: 100px;"><span class=""><?php echo $row['hari']; ?></span></td>
						<td style="width: 180px;"><span class=""><?php echo $row['jam']; ?></span></td>
						<td style="width: 153px;"><span class=""><?php echo $row['ruang']; ?></span></td>
						<!-- <td style="width: 100px;"><span class=""><?php echo $row['kelas']; ?></span></td> -->
						<td style="width: 250px;"><span class=""><?php echo $row['pelajaran']; ?></span></td>
						<td style="width: 200px;"><span class=""><?php echo $row['nama']; ?></span></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>
		</div>
	<?php }else{ ?>
		<?php $this->load->view('user/data-kosong'); ?>
	<?php } ?>
	  </div>

	  <!-- masukkan data jadwal -->
	  <div class="tab-pane" id="masukkan_data_jadwal">
		<?php echo form_open('p_admin/tambah_data_jadwal'); ?>
	  	<div class="form-pengaturan">
			<div style="border-top: none; margin-top: 15px;">
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


			<div>
				<label></label>
				<input name="tambah" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  
	</div>

</div>


