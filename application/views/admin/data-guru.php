<h3 class="header-isi">Data Guru</h3>
<div class="postingan">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#data_guru" data-toggle="tab">Data Guru</a></li>
	  <li><a href="#masukkan_data_guru" data-toggle="tab">Masukkan Data Guru</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- guru -->
	  <div class="tab-pane active" id="data_guru">
	  	<div class="kt-cr" style="margin-top: 15px;">
			<?php echo form_open('admin/data_guru'); ?>
			<input name="kata_kunci" type="text" placeholder="Cari disini . . .">
			<button name="q"><i class="glyphicon glyphicon-search"></i>Cari</button>
			<?php echo form_close(); ?>
		</div>
		<ul class="list-guru">
			<?php foreach ($guru as $row) { ?>
			<li>
				<div class="single-guru">
					<a href="<?php echo site_url("admin/detail_guru/".$row['nik']); ?>">
						<img src="<?php echo base_url('resource/img/photo/'.$row['foto']); ?>" alt="<?php  ?>">
						<p><span class="jdl-gr">NIK<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nik']; ?></span></p>
						<p><span class="jdl-gr">Nama<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nama']; ?></span></p>
						<p><span class="jdl-gr">Email<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['email']; ?></span></p>
						<p><span class="jdl-gr">HP<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['hp']; ?></span></p>
					</a>
				</div>
			</li>
			<?php } ?>
		</ul>
		<?php echo $pagination; ?>
	  </div>

	  <!-- masukkan data siswa -->
	  <div class="tab-pane" id="masukkan_data_guru">
	  	<?php echo form_open_multipart('p_admin/tambah_data_guru'); ?>
		<div class="form-pengaturan">
			<div style="border-top: none; margin-top: 15px;">
				<label>Foto</label>
				<input name="foto" type="file">
			</div>
			<div>
				<label>Nomer Induk Guru</label>
				<input name="nik" type="text" placeholder="Nomer Induk Guru">
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
				<select name="jenis_kelamin">
					<option value="<?php echo 'Laki-laki'; ?>"> <?php echo 'Laki-laki'; ?></option>
					<option value="<?php echo 'Perempuan'; ?>"> <?php echo 'Perempuan'; ?></option>
				</select>
			</div>
			<div>
				<label>Alamat</label>
				<input name="alamat" type="text" placeholder="Alamat">
			</div>
			<div>
				<label>Email</label>
				<input name="email" type="text" placeholder="Email">
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
		<?php echo form_close(); ?>
	  </div>
	  
	</div>

</div>


