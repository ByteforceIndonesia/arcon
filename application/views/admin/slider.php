<?php echo form_open_multipart(base_url('admin/sliders')) ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<p class="alert alert-warning">Please upload in jpg.</p>

			<?php foreach($sliders as $count => $link): ?>

			<div class="input-group">
			    <span class="input-group-addon"><?php echo $count+1 ?></span>
			    <input type="file" name="sliders[]" class="form-control">
				<img src="<?php echo base_url() . $link; ?>" width="100px" height="100px">
			</div>
			<br>

			<? endforeach; ?>

			<br>

			<input type="submit" class="btn btn-primary">

			<?php echo form_close() ?>
		</div>
	</div>
</div>