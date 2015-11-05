<h3 class="header-isi">E-Learning</h3>
<div class="postingan">
	<div class="kt-cr">
		<?php echo form_open('user/e_learning'); ?>
		<input name="kata_kunci" type="text" placeholder="Cari disini . . .">
		<button name="q"><i class="glyphicon glyphicon-search"></i>Cari</button>
		<?php echo form_close(); ?>
	</div>
	<ul class="list-data">
		<?php foreach ($elearning as $row) { ?>
		<li>
			<div class="single-data">
				<span><i class="glyphicon glyphicon-time"></i> <?php echo $row['tgl_upload']; ?></span>
				<p><?php echo $row['judul']; ?></p>
				<a href="<?php echo site_url('user/detail_data?id='.$row['id_materi_umum'].'&gk='.$row['nik']); ?>"><button class="btn-download"><i class="glyphicon glyphicon-cloud-download"></i> Download</button></a>
			</div>
		</li>
		<?php } ?>
	</ul>
	<?php echo $pagination; ?>
	<!-- <ul class="pagination">
		<li><a href="#">&laquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul> -->
</div>