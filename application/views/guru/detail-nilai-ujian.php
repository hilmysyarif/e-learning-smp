<h3 class="header-isi">Detail Nilai Ujian</h3>
<div class="postingan">
	<div class="single-detail">
		<h2><span>Detail Nilai Ujian</span></h2>
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<th><span class="jdl-detail">Tanggal Upload</span></th>
					<td><span class="desc-detail"><?php echo $detail_nilai['tgl_upload']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Di Upload Oleh</span></th>
					<td><span class="desc-detail"><?php echo $detail_nilai['nama_guru']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Judul Materi</span></th>
					<td><span class="desc-detail"><?php echo $detail_nilai['judul']; ?></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Link Download</span></th>
					<td><span class="desc-detail"><a href="#"><?php echo $detail_nilai['file']; ?></a></span></td>
				</tr>
				<tr>
					<th><span class="jdl-detail">Aksi</span></th>
					<td><span class="desc-detail"><a href="<?php echo site_url('guru/ubah_nilai/'.$detail_nilai['id_data_nilai']); ?>">Ubah</a> | <a href="<?php echo site_url('p_guru/hapus_data_detail_nilai?id='.$detail_nilai['id_data_nilai']) ?>">Hapus</a></span></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>