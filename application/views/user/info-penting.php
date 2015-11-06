
<h3 class="header-isi" style="color: #6666cc; text-shadow: 0 1px 0 #6666cc;">Login</h3>

<?php if($this->session->userdata('login_siswa')){ ?>
	<?php echo $this->load->view('siswa/form-login-siswa-sidebar'); ?>
<?php }elseif ($this->session->userdata('login_wali')) { ?>
	<?php echo $this->load->view('siswa/form-login-siswa-sidebar'); ?>
<?php }elseif ($this->session->userdata('login_guru')) { ?>
	<?php echo $this->load->view('guru/form-login-guru-sidebar'); ?>
<?php }elseif ($this->session->userdata('login_admin')) { ?>
	<?php echo $this->load->view('admin/form-login-admin-sidebar'); ?>
<?php }else{ ?>
<h3 class="header-sidebar">Login</h3>
<!-- form login siswa -->
<div class="form-login-sidebar">
	<div class="form-group">
		<?php echo form_open('p_login/masuk'); ?>
		<span class="bold">Masuk Sebagai :</span>
		<select name="menu" id="option-login">
			<option id="siswa" value="siswa">Siswa</option>
			<option id="guru" value="guru">Guru</option>
			<option id="wali" value="wali">Wali Murid</option>
			<option id="admin" value="admin">Admin</option>
		</select>
	</div>
	<div class="form-group">
		<label id="label_masuk">Nomor Siswa</label>
		<input name="id_siswa" id="id_masuk" type="text" placeholder="NIS">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input name="password" type="password" placeholder="Password">
	</div>
	<input class="btn-login-sidebar" name="masuk" type="submit" value="Masuk">
	<?php echo form_close(); ?>
	<span class="txt-9 forget"><a href="<?php echo site_url('user/lupa_password'); ?>">Lupa Password ?</a></span>
</div>
<?php }//end if session ?>
<!-- fb page -->
<div class="fb-page">
	<div class="fb-page" data-href="https://www.facebook.com/smpn15mukomuko" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/smpn15mukomuko"><a href="https://www.facebook.com/smpn15mukomuko">SMP Negeri 15 Mukomuko</a></blockquote></div></div>
</div>
<div class="calender">
	<iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;hl=id&amp;bgcolor=%23FFFFFF&amp;ctz=Asia%2FJakarta" style="border-width:0" width="295" height="300" frameborder="0" scrolling="no"></iframe>
</div>