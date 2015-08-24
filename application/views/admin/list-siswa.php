<h3 class="header-isi">Guru</h3>
<div class="postingan">
	<div class="kt-cr">
		<input type="text" placeholder="Cari File disini . . .">
		<button><i class="glyphicon glyphicon-search"></i>Cari</button>
	</div>
	<ul class="list-guru">
		<?php foreach ($siswa as $row) { ?>
		<li>
			<div class="single-guru">
				<a href="<?php echo site_url("admin/detail_siswa/".$row['nis']); ?>">
					<img src="<?php echo base_url('resource/img/photo/'.$row['foto']); ?>">
					<p><span class="jdl-gr">NIK<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nis']; ?></span></p>
					<p><span class="jdl-gr">Nama<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nama']; ?></span></p>
					<p><span class="jdl-gr">Jenis Kelamin<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['jenis_kelamin']; ?></span></p>
				</a>
			</div>
		</li>
		<?php } ?>
	</ul>
	
	<ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
</div>