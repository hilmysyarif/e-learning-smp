<h3 class="header-isi">Berita Terbaru</h3>
<div class="postingan">
	<ul class="list-post">
		<?php foreach ($berita as $row) { ?>
		<li>
			<div class="post-single">
				<img src="<?php echo base_url('resource/img/images/'.$row['gambar']); ?>">
				<span class="date"><i class="glyphicon glyphicon-time"></i> <?php echo $row['tgl_upload']; ?></span> 
				<a href="<?php echo site_url('user/detail_berita/'.$row['id']); ?>"><p>	<?php echo $row['isi']; ?></p></a>	
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