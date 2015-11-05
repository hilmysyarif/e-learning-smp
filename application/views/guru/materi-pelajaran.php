<h3 class="header-isi">Materi Pelajaran</h3>
<div class="postingan">
	<div class="form-tampil-nilai">
		<?php 
		$uri = $this->uri->segment(3);
		?>
		<?php if(empty($uri)){ ?>
		<?php echo form_open('p_guru/tampil_data_materi?id='.$guru['nik']); ?>
		<?php }else{ ?>
		<?php echo form_open('p_guru/tampil_data_materi?id='.$detail_guru['nik']); ?>
		<?php } ?>
		<span>Materi Pelajaran</span>
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

	<?php
	//generate new data
	$matapelajaran = [];
	if(!empty($materi_pelajaran)) {
		foreach($materi_pelajaran as $mp){
			$key=$mp['pelajaran'].' | '.$mp['kelas'];
			if(!in_array($key,$matapelajaran)){//is array exist
				array_push($matapelajaran,$key);
			}
		}
	}
	?>

	<?php 
	if(!empty($matapelajaran) && !empty($materi_pelajaran)) {
		foreach ($matapelajaran as $mp) {
	?>
	<div class="isi-postingan">
		<h2><span><?php echo $mp;?></span></h2>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th><span class="kolom-tgl">Tanggal Upload</span></th>
					<th><span class="kolom-mtr">Judul Materi</span></th>
					<th><span class="kolom-mtr">Download Materi</span></th>
				</tr>
			</thead>
			<tbody>
	<?php 
			foreach($materi_pelajaran as $materi) {
				if($materi['pelajaran'].' | '.$materi['kelas'] == $mp) {
	?>
				<tr>
					<td><span class="kolom-tgl"><?php echo $materi['tgl_upload'];?></span></td>
					<td><span class="kolom-mtr"><?php echo $materi['judul']; ?></span></td>
					<td><span class="kolom-mtr"><a href="<?php echo site_url('guru/detail_materi?id='.$materi['id_materi_pelajaran'].'&id_guru='.$detail_guru['nik']); ?>"> <?php echo $materi['file']; ?></a></span></td>
				</tr>
	<?php
				}
			}
	?>
			</tbody>
		</table>
	</div>
	<?php } ?>
	<?php }else{ ?>
	<?php $this->load->view('user/data-kosong'); ?>
	<?php } ?>
</div>