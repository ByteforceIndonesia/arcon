<?php echo form_open_multipart(base_url('admin/aboutus'), array('class' => 'form-inline')) ?>

<div class="container">
	<?php foreach ($aboutus as $data): ?>
	<div class="row">
		<div class="col-lg-6">
			<div class="input-group">
			    <span class="input-group-addon">Entry :</span><br>
			    <textarea name="<?php echo $data->field ?>" class="form-control">
			        <?php echo $data->value ?>
			    </textarea>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="input-group">
				<span class="input-group-addon">Image :</span><br>
			    <input type="file" name="<?php echo $data->field . '_file' ?>" class="form-control">
			    <img src="<?php echo base_url() . $data->images ?>" height="100px" width="100px">
			</div>
		</div>
	</div>
	<br><br>
	<?php endforeach; ?>
	
	<br><br>

	<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
			    <input type="submit" class="btn btn-primary">
			</div>
		</div>
	</div>
	<?php echo form_close() ?>
</div>