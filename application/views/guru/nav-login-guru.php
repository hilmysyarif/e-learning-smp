			<div class="menu-profile">
				<div class="menu-profile-span">
					<?php if($this->session->userdata('login_guru')){ ?>
					<span><a href="<?php echo site_url('guru'); ?>"><?php echo $guru['nik']; ?></a></span>
					<span><a href="<?php echo site_url('p_guru/keluar_guru'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
					<?php } ?>
				</div>
				<a href="<?php echo site_url('guru'); ?>"><img src="<?php echo base_url('resource/img/photo/'.$guru['foto']); ?>" /></a>
			</div>