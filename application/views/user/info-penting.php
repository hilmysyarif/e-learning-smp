<h3 class="header-isi">Informasi Penting !</h3>
<ul class="informasi">
	<?php foreach ($informasi as $row) { ?>
	<li><a href="<?php echo site_url('user/detail_info_penting/'.$row['id']); ?>"><p><?php echo $row['judul']; ?></p></a></li>
	<?php } ?>
</ul>
