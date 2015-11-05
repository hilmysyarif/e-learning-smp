		</div><!-- end isi-kiri -->

		<div class="isi-kanan">
			<?php echo $this->load->view('user/info-penting'); ?>
			<!-- <h4 class="header-isi-kanan">Menu Login</h4>
			<div>
				<div class="mn-masuk">
					<?php echo form_open('p_login/masuk'); ?>
					<span>Masuk Sebagai :</span>
					<select name="menu" id="option-login">
						<option id="siswa" value="siswa">Siswa</option>
						<option id="guru" value="guru">Guru</option>
						<option id="wali" value="wali">Wali Murid</option>
						<option id="admin" value="admin">Admin</option>
					</select>
				</div>


			</div> -->

		</div><!-- end isi-kanan -->
		<div class="footer">
			<?php echo $this->load->view('user/footer-user'); ?>
		</div>
	</div>
</div>
