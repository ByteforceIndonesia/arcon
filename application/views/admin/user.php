<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Change Password</h1>
			<hr width="100%">

			<?php echo form_open('admin/change_user') ?>
			<div class="input-group">
				<span class="input-group-addon">Username</span>
				<input type="text" name="username" class="form-control">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon">Old Password</span>
				<input type="text" name="password_old" class="form-control">
			</div>
			<br>
			<div class="input-group">
				<span class="input-group-addon">New Password</span>
				<input type="text" name="password_new" class="form-control">
			</div>
			<br>
			<div class="input-group">
				<button type="submit" value="Change" class="btn btn-warning">Change</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>