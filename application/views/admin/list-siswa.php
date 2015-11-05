<h3 class="header-isi">Guru</h3>
<div class="postingan">
	<div class="kt-cr">
		<?php echo form_open('admin/list_siswa'); ?>
		<input name="kata_kunci" type="text" placeholder="Cari disini . . .">
		<button name="q"><i class="glyphicon glyphicon-search"></i>Cari</button>
		<?php echo form_close(); ?>
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
	<?php echo $pagination; ?>
</div>