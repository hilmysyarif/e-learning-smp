<h3 class="header-isi">Nilai Ujian</h3>
<div class="postingan">
	<div class="form-tampil-nilai">
		<span>Nilai Ujian</span>
		<select>
			<option>Pilih Semester</option>
			<option>Ganjil</option>
			<option>Genap</option>
		</select>
		<select>
			<option>Pilih Tahun Ajaran</option>
			<option>2015/2016</option>
			<option>2016/2017</option>
			<option>2017/2018</option>
		</select>
		<input type="submit" value="Tampilkan">
	</div>

	<div class="isi-postingan">
		<h2><span>Semester Genap </span> | <span> Tahun Ajaran 2015/2016</span></h2>
		<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th><span class="kolom-tgl">Tanggal Upload</span></th>
				<th><span class="kolom-mtr">Judul Materi</span></th>
				<th><span class="kolom-mtr">Download Materi</span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><span class="kolom-tgl">07-05-2015 (03:17:00)</span></td>
				<td><span class="kolom-mtr">Perancangan Aplikasi dengan Metode Dunia Lain</span></td>
				<td><span class="kolom-mtr"><a href="<?php echo site_url('guru/detail_nilai'); ?>"> Perancangan Aplikasi dengan Metode Dunia Lain.pdf</a></span></td>
			</tr>
		</tbody>
	</table>
	</div>
</div>