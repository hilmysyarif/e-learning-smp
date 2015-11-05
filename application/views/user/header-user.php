<!-- sdk facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5&appId=843261409050904";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- <div class="kolom-12"> -->
<div class="kolom-1-tab kolom-10">
	<div class="konten">
		<div class="menu-header">
			<div class="logo-sekolah">
				<a href="#"><img src="<?php echo base_url('resource/img/logo/Logo.png'); ?>"></a>
				<h1>SMP Negeri 15 Mukomuko</h1>
				<div class="alamat-sekolah">
					<span>Jl. Cut Muthia - Kec. Penarik - Kab. Mukomuko - Bengkulu.</span>
					<span>Kode Pos: 38368</span>
				</div>
			</div>
			<!-- <div class="form-masuk-siswa">
				<?php echo form_open(''); ?>
				<input name="kata_kunci" class="input-form" type="text" value="" placeholder="Cari" style="width: 255px;">
				<button class="btn-masuk"><span class="glyphicon glyphicon-search"></span>Cari</button>
				<?php echo form_close(); ?>
			</div> -->
			
			<?php echo $this->load->view('user/nav-login'); ?>
		</div>
	</div>
</div>
