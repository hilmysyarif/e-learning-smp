<div class="login-admin-form">
	<?php echo form_open('p_login/masuk_admin'); ?>
	<div class="form-group">
	    <label>Email</label>
	    <input name="id_admin" type="email" class="form-control" placeholder="Enter email">
	</div>
	<div class="form-group">
		<label>Password</label>
	    <input name="password" type="password" class="form-control" placeholder="Password">
	</div>
	<input class="btn btn-login-sidebar" name="masuk" type="submit" value="Masuk">
	<?php echo form_close(); ?>
</div>