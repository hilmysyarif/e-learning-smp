<h3 class="header-isi">Nilai Ujian</h3>
<div class="postingan">
	<div class="form-tampil-nilai">
		<?php 
		$uri = $this->uri->segment(3);
		?>
		<?php if(empty($uri)){ ?>
		<?php echo form_open('p_guru/tampil_data_nilai?id='.$guru['nik']); ?>
		<?php }else{ ?>
		<?php echo form_open('p_guru/tampil_data_nilai?id='.$detail_guru['nik']); ?>
		<?php } ?>
		<span>Nilai Ujian</span>
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
	</div>
	<?php if(!empty($data_nilai)){ ?>
	<div class="isi-postingan">
		<h2><span>Semester <?php echo $nama_semester['semester']; ?> </span> | <span> Tahun Ajaran <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span></h2>
		<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th><span class="kolom-tgl">Tanggal Upload</span></th>
				<th><span class="kolom-mtr">Judul Materi</span></th>
				<th><span class="kolom-mtr">Download Materi</span></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_nilai as $row) { ?>
			<tr>
				<td><span class="kolom-tgl"><?php echo $row['tgl_upload']; ?></span></td>
				<td><span class="kolom-mtr"><?php echo $row['judul']; ?></span></td>
				<td><span class="kolom-mtr"><a href="<?php echo site_url('guru/detail_nilai?id='.$row['id_data_nilai'].'&id_guru='.$detail_guru['nik']); ?>"> <?php echo $row['file']; ?></a></span></td>
				<!-- <td><span class="kolom-mtr"><a href="<?php echo site_url('guru/detail_nilai?id='.$row['id_data_nilai']); ?>"> <?php echo $row['file']; ?></a></span></td> -->
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
	<?php }else{ ?>
	<?php echo 'Data Kosong'; ?>
	<?php }?>
</div>