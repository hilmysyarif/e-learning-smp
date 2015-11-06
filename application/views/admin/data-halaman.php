<h3 class="header-isi">Data Halaman</h3>
<div class="postingan">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#berita" data-toggle="tab">Berita</a></li>
	  <li><a href="#informasi_siswa" data-toggle="tab">Informasi Siswa</a></li>
	  <li><a href="#hubungi_kami" data-toggle="tab">Hubungi Kami</a></li>
	  <!-- <li><a href="#tentang_kami" data-toggle="tab">Tentang Kami</a></li> -->
	  <li><a href="#sejarah" data-toggle="tab">Sejarah</a></li>
	  <li><a href="#visi_misi" data-toggle="tab">Visi & Misi</a></li>
	  <li><a href="#slides" data-toggle="tab">Slides</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- berita -->
	  <div class="tab-pane active" id="berita">
	  	<?php echo form_open_multipart('p_admin/tambah_data_berita'); ?>
		<div class="form-pengaturan">
			<div style="border-top: none; margin-top: 15px;">
				<label>Gambar Thumbnail</label>
				<input name="gambar" type="file">
			</div>
			<div>
				<label>Judul Berita</label>
				<input name="judul" type="text" placeholder="Judul Berita">
			</div>
			<div>
				<label>Isi Berita</label>
				<textarea class="ckeditor" name="isi" placeholder="Isi Berita"></textarea>
			</div>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  <!-- informasi -->
	  <div class="tab-pane" id="informasi_siswa">
	  	<?php echo form_open('p_admin/tambah_data_informasi'); ?>
		<div class="form-pengaturan">
			<div style="border-top: none; margin-top: 15px;">
				<label>Judul Informasi</label>
				<input name="judul" type="text" placeholder="Judul Berita">
			</div>
			<div style="border-top: none;">
				<label>Isi Informasi</label>
				<textarea class="ckeditor" name="isi" placeholder="Isi Informasi"></textarea>
			</div>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  <!-- hubungi kami -->
	  <div class="tab-pane" id="hubungi_kami">
		<?php echo form_open('p_admin/ubah_data_kontak?id=2') ?>
		<div class="form-pengaturan">
			<div style="border-top: none;">
				<label>Isi Kontak</label>
				<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $kontak['isi_hubungi_kami']; ?></textarea>
			</div>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  <!-- tentang kami -->
	  <!-- <div class="tab-pane" id="tentang_kami">
		<?php echo form_open('p_admin/ubah_data_tentang_kami?id=1'); ?>
	  	<div class="form-pengaturan">
			<div style="border-top: none;">
				<label>Isi Tentang Kami</label>
				<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $tentang_kami['isi_tentang_kami']; ?></textarea>
			</div>
			<div style="border-top: none;"> -->
				<!-- <label></label> -->
				<!-- <input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div> -->
	  <!-- sejarah -->
	  <div class="tab-pane" id="sejarah">
		<?php echo form_open('p_admin/ubah_data_sejarah?id=3'); ?>
	  	<div class="form-pengaturan">
			<div style="border-top: none;">
				<label>Isi Sejarah</label>
				<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $sejarah['isi_sejarah']; ?></textarea>
			</div>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  <!-- visi_misi -->
	  <div class="tab-pane" id="visi_misi">
		<?php echo form_open('p_admin/ubah_data_visi_misi?id=4'); ?>
	  	<div class="form-pengaturan">
			<div style="border-top: none;">
				<label>Isi Visi & Misi</label>
				<textarea class="ckeditor" name="isi" placeholder="Tulis disini . . ."><?php echo $visi_misi['isi_visi_misi']; ?></textarea>
			</div>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>
	  <!-- slides -->
	  <div class="tab-pane" id="slides">
	  	<?php echo form_open_multipart('p_admin/ubah_data_slides'); ?>
		<div class="form-pengaturan">
			<?php $n=1; foreach ($slides as $row) { ?>
			<div style="border-top: none; margin-top: 15px;">
				<label>Gambar <?php echo $n; ?></label>
				<input name="id_<?php echo $n; ?>" type="hidden" value="<?php echo $row['id']; ?>">
				<input name="gambar_<?php echo $n; ?>" type="file">
				<img src="<?php echo base_url('resource/img/slides/'.$row['gambar']); ?>">
			</div>
			<?php $n++; } ?>
			<div style="border-top: none;">
				<!-- <label></label> -->
				<input name="simpan" type="submit" value="Simpan">
			</div>
		</div>
		<?php echo form_close(); ?>
	  </div>

	</div>

</div>


