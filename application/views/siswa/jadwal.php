<h3 class="header-isi">Jadwal Pelajaran</h3>
<div class="postingan">
	<?php if(!empty($jadwal)){ ?>
	<div class="isi-postingan">
		<h2 style="text-align: left;"><span>Jadwal Pelajaran Kelas <?php echo $nama_kelas['kelas']; ?> | Semester <?php echo $nama_semester['semester']; ?> | Tahun Ajaran <?php echo $nama_tahun_ajaran['tahun_ajaran']; ?></span></h2>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th style="width: 33px;"><span class="">No</span></th>
					<th style="width: 100px;"><span class="">Hari</span></th>
					<th style="width: 180px;"><span class="">Jam</span></th>
					<th style="width: 130px;"><span class="">Ruang</span></th>
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