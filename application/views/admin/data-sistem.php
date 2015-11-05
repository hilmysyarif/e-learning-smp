<h3 class="header-isi">Data Sistem</h3>
<div class="postingan">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#data_tahun_ajaran" data-toggle="tab">Data Tahun Ajaran</a></li>
	  <li><a href="#data_semester" data-toggle="tab">Data Semester</a></li>
	  <li><a href="#data_kelas" data-toggle="tab">Data Kelas</a></li>
	  <li><a href="#data_hari" data-toggle="tab">Data Hari</a></li>
	  <li><a href="#data_jam" data-toggle="tab">Data Jam</a></li>
	  <li><a href="#data_pelajaran" data-toggle="tab">Data Pelajaran</a></li>
	  <li><a href="#data_ruang" data-toggle="tab">Data Ruang</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- tahun ajaran -->
	  <div class="tab-pane active" id="data_tahun_ajaran">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_tahun_ajaran'); ?>
			<h3>Tambah Tahun Ajaran</h3>
			<div>
				<label>Tahun Ajaran</label>
				<input name="tahun_ajaran" type="text" placeholder="Tahun Ajaran">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Tahun Ajaran</h3>
			<div>
				<label>Tahun Ajaran</label>
				<select>
					<?php if(!empty($tahun_ajaran)) { ?>
					<?php foreach ($tahun_ajaran as $row) { ?>
					<option><?php echo $row['tahun_ajaran']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_tahun_ajaran'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- semester -->
	  <div class="tab-pane" id="data_semester">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_semester'); ?>
			<h3>Tambah Semester</h3>
			<div>
				<label>Semester</label>
				<input name="semester" type="text" placeholder="Semester">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Semester</h3>
			<div>
				<label>Semester</label>
				<select>
					<?php if(!empty($semester)) { ?>
					<?php foreach ($semester as $row) { ?>
					<option><?php echo $row['semester']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_semester'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- kelas -->
	  <div class="tab-pane" id="data_kelas">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_kelas'); ?>
			<h3>Tambah Kelas</h3>
			<div>
				<label>Kelas</label>
				<input name="kelas" type="text" placeholder="Kelas">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Kelas</h3>
			<div>
				<label>Kelas</label>
				<select>
					<?php if(!empty($kelas)) { ?>
					<?php foreach ($kelas as $row) { ?>
					<option><?php echo $row['kelas']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_kelas'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- hari -->
	  <div class="tab-pane" id="data_hari">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_hari'); ?>
			<h3>Tambah Hari</h3>
			<div>
				<label>Hari</label>
				<input name="hari" type="text" placeholder="Hari">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Hari</h3>
			<div>
				<label>Hari</label>
				<select>
					<?php if(!empty($hari)) { ?>
					<?php foreach ($hari as $row) { ?>
					<option><?php echo $row['hari']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_hari'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- jam -->
	  <div class="tab-pane" id="data_jam">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_jam'); ?>
			<h3>Tambah Jam</h3>
			<div>
				<label>Jam</label>
				<input name="jam" type="text" placeholder="Jam">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Jam</h3>
			<div>
				<label>Jam</label>
				<select>
					<?php if(!empty($jam)) { ?>
					<?php foreach ($jam as $row) { ?>
					<option><?php echo $row['jam']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_jam'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- pelajaran -->
	  <div class="tab-pane" id="data_pelajaran">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_pelajaran'); ?>
			<h3>Tambah Pelajaran</h3>
			<div>
				<label>Pelajaran</label>
				<input name="pelajaran" type="text" placeholder="Pelajaran">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Pelajaran</h3>
			<div>
				<label>Pelajaran</label>
				<select>
					<?php if(!empty($pelajaran)) { ?>
					<?php foreach ($pelajaran as $row) { ?>
					<option><?php echo $row['pelajaran']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_pelajaran'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>

	  <!-- ruang -->
	  <div class="tab-pane" id="data_ruang">
	  	<div class="form-pengaturan" style="margin-top: 15px;">
			<?php echo form_open('p_admin/tambah_data_ruang'); ?>
			<h3>Tambah Ruang</h3>
			<div>
				<label>Ruang</label>
				<input name="ruang" type="text" placeholder="Ruang">
			</div>
			<div>
				<label></label>
				<input name="tambah" type="submit" value="Tambah">
			</div>
			<?php echo form_close(); ?>
		</div>
		<div class="form-pengaturan">
			<h3>Data Ruang</h3>
			<div>
				<label>Ruang</label>
				<select>
					<?php if(!empty($ruang)) { ?>
					<?php foreach ($ruang as $row) { ?>
					<option><?php echo $row['ruang']; ?></option>
					<?php }//end foreach ?>
					<?php }else{ ?>
					<option selected="1"><?php echo 'Data Kosong'; ?></option>
					<?php } ?>
				</select>
			</div>
			<div>
				<label></label>
				<a href="<?php echo site_url('admin/ubah_ruang'); ?>"><input type="submit" value="Ubah"></a>
			</div>
		</div>
	  </div>
	  
	</div>

</div>