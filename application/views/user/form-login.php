<?php if($this->session->userdata('login_siswa')){ ?>
	<?php echo $this->load->view('siswa/form-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_wali')) { ?>
	<?php echo $this->load->view('siswa/form-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_guru')) { ?>
	<?php echo $this->load->view('guru/form-login-guru'); ?>
<?php }elseif ($this->session->userdata('login_admin')) { ?>
	<?php echo $this->load->view('admin/form-login-admin'); ?>
<?php }else{ ?>
<div class="form-masuk" style="padding-bottom:20px;">
	<div class="header-form-masuk" style="border-bottom: none;">
		<div class="header-form-login">
			<?php echo form_open('p_login/masuk'); ?>
			<span>Masuk Sebagai :</span>
			<select name="menu" id="option-login" style="width: 135px;">
				<option id="siswa" value="siswa">Siswa</option>
				<option id="guru" value="guru">Guru</option>
				<option id="wali" value="wali">Wali Murid</option>
				<option id="admin" value="admin">Admin</option>
			</select>
		</div>
	</div>

	<!-- form login siswa -->
	<div class="form-isi">
		<div class="form-group">
			<label id="label_masuk">Nomor Siswa</label>
			<input name="id_siswa" id="id_masuk" type="text" placeholder="NIS">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input name="password" type="password" placeholder="Password">
		</div>
		<input name="masuk" type="submit" value="Masuk">
		<?php echo form_close(); ?>
		<span class="txt-9"><a href="#">Lupa Password ?</a></span>
	</div>

</div>
<?php }//end if session ?>
