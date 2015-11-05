<?php if($this->session->userdata('login_siswa')){ ?>
	<?php echo $this->load->view('siswa/nav-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_wali')) { ?>
	<?php echo $this->load->view('siswa/nav-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_guru')) { ?>
	<?php echo $this->load->view('guru/nav-login-guru'); ?>
<?php }elseif ($this->session->userdata('login_admin')) { ?>
	<?php echo $this->load->view('admin/nav-login-admin'); ?>
<?php }else{ ?>

<?php } ?>