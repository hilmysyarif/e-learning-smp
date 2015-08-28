<h3 class="header-isi">Upload Data</h3>
<div class="postingan">
	<div class="form-pengaturan">
		<h3>Upload Materi Pelajaran</h3>
		<div>
			<label>Judul Materi</label>
			<input type="text" placeholder="Judul Materi">
		</div>
		<div>
			<label>Pilih Pelajaran</label>
			<select>
				<option>Matematika</option>
				<option>Bahasa Indonesia</option>
			</select>
		</div>
		<div>
			<label>Pilih Kelas</label>
			<select>
				<option>Kelas 1 A</option>
				<option>Kelas 1 B</option>
			</select>
		</div>
		<div>
			<label>Pilih Semester</label>
			<select>
				<option>Genap</option>
				<option>Ganjil</option>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select>
				<option>2017/2018</option>
				<option>2018/2019</option>
				<option>2019/2020</option>
				<option>2020/2021</option>
				<option>2021/2022</option>
			</select>
		</div>
		<div>
			<label>Pilih File</label>
			<input type="file" placeholder="Pilih Foto">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Upload">
		</div>
	</div>
	<div class="form-pengaturan">
		<?php echo form_open('p_guru/tambah_data_pengumuman'); ?>
		<h3>Tulis Pengumuman</h3>
		<div>
			<label>Isi Pengumuman</label>
			<textarea name="isi" class="" placeholder="Tulis disini..."></textarea>
		</div>
		<div>
			<label></label>
			<input name="simpan" type="submit" value="Simpan">
		</div>
		<?php echo form_close(); ?>
	</div>
	<div class="form-pengaturan">
		<h3>Upload Nilai Ujian</h3>
		<div>
			<label>Judul Materi</label>
			<input type="text" placeholder="Judul Materi">
		</div>
		<div>
			<label>Pilih Semester</label>
			<select>
				<option>Genap</option>
				<option>Ganjil</option>
			</select>
		</div>
		<div>
			<label>Pilih Tahun Ajaran</label>
			<select>
				<option>2017/2018</option>
				<option>2018/2019</option>
				<option>2019/2020</option>
				<option>2020/2021</option>
				<option>2021/2022</option>
			</select>
		</div>
		<div>
			<label>Pilih File</label>
			<input type="file" placeholder="Pilih Foto">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Upload">
		</div>
	</div>
</div>