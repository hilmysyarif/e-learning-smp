<h3 class="header-isi">Detail Data</h3>
<div class="postingan">
	<div class="single-detail-data">
		<h2><span>Detail Data</span></h2>
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<th><span class="jdl-detail-data">Tanggal Upload</span></th>
					<td><span class="desc-detail-data"><?php echo $detail_elearning['tgl_upload']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail-data">Di Upload Oleh</span></th>
					<td><span class="desc-detail-data"><?php echo $detail_elearning['nama']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail-data">Judul Materi</span></th>
					<td><span class="desc-detail-data"><?php echo $detail_elearning['judul']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail-data">Pelajaran</span></th>
					<td><span class="desc-detail-data"><?php echo $detail_elearning['pelajaran']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail-data">Link Download</span></th>
					<td><span class="desc-detail-data"><a href="#"><?php echo $detail_elearning['file']; ?></a></span></td>
				</tr>
				<?php if($nik==$get_nik && $this->session->userdata('login_guru')){ ?>
				<tr>
					<th><span class="jdl-detail-data">Aksi</span></th>
					<td><span class="desc-detail"><a href="<?php echo site_url('guru/ubah_elearning/'.$detail_elearning['id_materi_umum']); ?>">Ubah</a> | <a href="<?php echo site_url('p_guru/hapus_data_detail_elearning?id='.$detail_elearning['id_materi_umum']); ?>">Hapus</a></span></td>
				</tr>
				<?php }else{ ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>