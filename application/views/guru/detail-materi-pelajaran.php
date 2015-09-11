<h3 class="header-isi">Detail Materi Pelajaran</h3>
<div class="postingan">
	<div class="single-detail">
		<h2><span>Detail Materi Pelajaran</span></h2>
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<th><span class="jdl-detail">Tanggal Upload</span></th>
					<td><span class="desc-detail"><?php echo $detail_materi['tgl_upload']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Di Upload Oleh</span></th>
					<td><span class="desc-detail"><?php echo $detail_materi['nama_guru']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Judul Materi</span></th>
					<td><span class="desc-detail"><?php echo $detail_materi['judul']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Pelajaran</span></th>
					<td><span class="desc-detail"><?php echo $detail_materi['pelajaran'] ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Link Download</span></th>
					<td><span class="desc-detail"><a href="<?php echo site_url('p_guru/download/'.$detail_materi['id_materi_pelajaran']); ?>"><?php echo $detail_materi['file']; ?></a></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Aksi</span></th>
					<td><span class="desc-detail"><a href="<?php echo site_url('guru/ubah_materi/'.$detail_materi['id_materi_pelajaran']); ?>">Ubah</a> | <a href="<?php echo site_url('p_guru/hapus_data_detail_materi?id='.$detail_materi['id_materi_pelajaran']); ?>">Hapus</a></span></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>