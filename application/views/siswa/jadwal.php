<h3 class="header-isi">Jadwal Pelajaran</h3>
<div class="postingan">
	<!-- <div class="form-tampil-nilai">
		<?php echo form_open('p_admin/tampil_data_jadwal'); ?>
		<select name="kelas">
			<option>Pilih Kelas</option>
			<?php if(!empty($kelas)) { ?>
			<?php foreach ($kelas as $row) { ?>
			<option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['kelas']; ?></option>
			<?php }//end foreach ?>
			<?php }else{ ?>
			<option selected="1"><?php echo 'Data Kosong'; ?></option>
			<?php } ?>
		</select>
		<select name="semester">
			<option>Pilih Semester</option>
			<?php if(!empty($semester)) { ?>
			<?php foreach ($semester as $row) { ?>
			<option value="<?php echo $row['id_semester']; ?>"><?php echo $row['semester']; ?></option>
			<?php }//end foreach ?>
			<?php }else{ ?>
			<option selected="1"><?php echo 'Data Kosong'; ?></option>
			<?php } ?>
		</select>
		<select name="tahun_ajaran">
			<option>Pilih Tahun Ajaran</option>
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
	</div> -->

	<div class="isi-postingan">
		<h2 style="text-align: left;"><span>Jadwal Pelajaran </span> | <span> Kelas <?php //echo $jadwal['kelas']; echo $jadwal['semester']; echo $jadwal['tahun_ajaran']; ?></span></h2>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th style="width: 33px;"><span class="">No</span></th>
					<th style="width: 100px;"><span class="">Hari</span></th>
					<th style="width: 130px;"><span class="">Jam</span></th>
					<th style="width: 130px;"><span class="">Ruang</span></th>
					<th style="width: 100px;"><span class="">Kelas</span></th>
					<th style="width: 200px;"><span class="">Pelajaran</span></th>
					<th style="width: 200px;"><span class="">Guru</span></th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach ($jadwal as $row) { ?>
				<tr>
					<td style="width: 33px;"><span class=""><?php echo $i; ?></span></td>
					<td style="width: 100px;"><span class=""><?php echo $row['hari']; ?></span></td>
					<td style="width: 130px;"><span class=""><?php echo $row['jam']; ?></span></td>
					<td style="width: 153px;"><span class=""><?php echo $row['ruang']; ?></span></td>
					<td style="width: 100px;"><span class=""><?php echo $row['kelas']; ?></span></td>
					<td style="width: 200px;"><span class=""><?php echo $row['pelajaran']; ?></span></td>
					<td style="width: 200px;"><span class=""><?php echo $row['nama']; ?></span></td>
				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
	</div>
</div>