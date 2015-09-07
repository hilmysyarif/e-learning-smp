<?php if($this->session->userdata('login_siswa')){ ?>
	<?php echo $this->load->view('siswa/form-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_wali')) { ?>
	<?php echo $this->load->view('siswa/form-login-siswa'); ?>
<?php }elseif ($this->session->userdata('login_guru')) { ?>
	<?php echo $this->load->view('guru/form-login-guru'); ?>
<?php }elseif ($this->session->userdata('login_admin')) { ?>
	<?php echo $this->load->view('admin/form-login-admin'); ?>
<?php }else{ ?>
<div class="form-masuk">
	<div class="header-form-masuk">
		<?php echo form_open('p_siswa/masuk_siswa'); ?>
		<span>Masuk Sebagai :</span>
		<select name="menu" style="width: 135px;">
			<option id="siswa" value="siswa">Siswa</option>
			<option id="guru" value="guru">Guru</option>
			<option id="wali" value="wali">Wali Murid</option>
		</select>
	</div>

	<!-- form login siswa -->
	<div class="form-isi">
		<div class="form-group">
			<label>Nomor Siswa</label>
			<input name="id" type="text" placeholder="Id">
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





<!-- <div class="form-masuk tab-item">
		<div class="header-form-masuk">
			<span>Masuk Sebagai :</span>
			<ul class="menu-masuk">
				<li class="active"><a href="#siswa" data-toggle="tab">Siswa</a></li>
				<li class=""><a href="#guru" data-toggle="tab">Guru</a></li>
				<li class=""><a href="#wali" data-toggle="tab">Wali Murid</a></li>
			</ul>
		</div>

		<div class="tab-content"> -->
			<!-- form login siswa -->
			<!-- <div class="tab-pane active" data-toggle="tab" id="siswa">
				<div class="form-isi">
					<?php echo form_open('p_siswa/masuk_siswa'); ?>
					<div class="form-group">
						<label>Nomor Siswa</label>
						<input name="nis" type="text" placeholder="Nomor Siswa">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" placeholder="Password">
					</div>
					<input name="masuk" type="submit" value="Masuk">
					<?php echo form_close(); ?>
					<span class="txt-9"><a href="#">Lupa Password ?</a></span>
				</div>
			</div> -->
			<!-- form login guru -->
			<!-- <div class="tab-pane" data-toggle="tab" id="guru">
				<div class="form-isi">
					<div class="form-group">
						<label>NIK</label>
						<input type="text" value="" placeholder="NIK">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" value="" placeholder="Password">
					</div>
					<input type="submit" value="Masuk">
					<span class="txt-9"><a href="#">Lupa Password ?</a></span>
				</div>
			</div> -->
			<!-- form login wali-murid -->
			<!-- <div class="tab-pane" data-toggle="tab" id="wali">
				<div class="form-isi">
					<div class="form-group">
						<label>Nomer KTP</label>
						<input type="text" value="" placeholder="Nomer KTP">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" value="" placeholder="Password">
					</div>
					<input type="submit" value="Masuk">
					<span class="txt-9"><a href="#">Lupa Password ?</a></span>
				</div>
			</div>

		</div>
	</div> -->