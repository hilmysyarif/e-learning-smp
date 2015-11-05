			<div class="menu-profile">
				<div class="menu-profile-span">
					<?php if($this->session->userdata('login_siswa')){ ?>
					<span><a href="<?php echo site_url('siswa'); ?>"><?php echo $siswa['nis']; ?></a></span>
					<span><a href="<?php echo site_url('p_siswa/keluar_siswa'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
					<?php }else{ ?>
					<span><a href="<?php echo site_url('siswa'); ?>"><?php echo $this->session->userdata['login_wali']['no_ktp']; ?></a></span>
					<span><a href="<?php echo site_url('p_wali/keluar_wali'); ?>"><i class="glyphicon glyphicon-log-out"></i> Keluar</a></span>
					<?php } ?>
				</div>
				<a href="<?php echo site_url('siswa'); ?>"><img src="<?php echo base_url('resource/img/photo/'.$siswa['foto']); ?>" /></a>
			</div>