<h3 class="header-isi">Nilai Ujian</h3>
<div class="postingan">
	<div class="single-hsl-nilai">
		<!-- <h1>Salinan Nilai Mata Pelajaran</h1> -->
		<p><span class="jdl-biodata">Nomer Induk Siswa</span><span>: </span><span><?php echo $siswa['nis']; ?></span></p>
		<p><span class="jdl-biodata">Nama</span><span>: </span><span><?php echo $siswa['nama']; ?></span></p>
		<p><span class="jdl-biodata">Kelas</span><span>: </span><span>Arif</span></p>
		<br>
		<div class="form-tampil-nilai">
			<?php echo form_open('p_siswa/tampil_data_nilai_siswa'); ?>
			<span>Nilai Pelajaran </span>
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
		<?php if(!empty($nilai)){ ?>
		<div class="isi-postingan">
			<h2><span>Nilai Semester <?php echo $nama_semester['semester']; ?> | Tahun Ajaran <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span></h2>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="kolom-no">No</th>
						<th class="kolom-pel">Mata Pelajaran</th>
						<th class="kolom-nilai">Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php $i= 1; foreach ($nilai as $row) { ?>
					<tr>
						<td class="kolom-no"><?php echo $i; ?></td>
						<td class="kolom-pel"><?php echo $row['pelajaran']; ?></td>
						<td class="kolom-nilai"><?php echo $row['nilai']; ?></td>
					</tr>
					<?php $i++; } ?>
					<?php $a=0; $a += $nilai['nilai']; ?>
					<?php $rata_rata= $a / $total_nilai; ?>
					<tr>
						<td class="dua-kolom-tbl" colspan="2">Jumlah Mata Pelajaran</td>
						<td class="kolom-nilai bold"><?php echo $total_nilai; ?></td>
					</tr>
					<tr>
						<td class="dua-kolom-tbl" colspan="2">Nilai Rata-rata</td>
						<td class="kolom-nilai bold"><?php echo $rata_rata; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php }else{ ?>
		<?php echo 'Data Kosong'; ?>
		<?php } ?>
	</div>
</div>