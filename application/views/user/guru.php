<h3 class="header-isi">Guru</h3>
<div class="postingan">
	<ul class="list-guru">
		<?php foreach ($semua_guru as $row) { ?>
		<li>
			<div class="single-guru">
				<a href="<?php echo site_url('guru/detail_guru/'.$row['nik']); ?>">
					<img src="<?php echo base_url('resource/img/photo/'.$row['foto']); ?>">
					<p><span class="jdl-gr">NIK<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nik']; ?></span></p>
					<p><span class="jdl-gr">Nama<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['nama']; ?></span></p>
					<p><span class="jdl-gr">Email<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['email']; ?></span></p>
					<p><span class="jdl-gr">HP<b class="pull-right">:</b></span><span class="desc-gr"> <?php echo $row['hp']; ?></span></p>
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