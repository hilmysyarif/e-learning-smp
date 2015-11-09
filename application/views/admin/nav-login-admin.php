			<div class="menu-profile">
				<div class="menu-profile-span">
					<?php if($this->session->userdata('login_admin')){ ?>
					<span><a href="<?php echo site_url('admin/data_halaman'); ?>"><?php echo $admin['email']; ?></a></span>
					<span><a href="<?php echo site_url('p_admin/keluar_admin'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
					<?php } ?>
				</div>
				<a href="<?php echo site_url('admin/data_halaman'); ?>"><img src="<?php echo base_url('resource/img/photo/'.$admin['foto']); ?>" /></a>
			</div>