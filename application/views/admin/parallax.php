<?php echo form_open_multipart(base_url('admin/parallax')) ?>

<p class="alert alert-warning">Please upload in jpg.</p>

<?php foreach($parallaxes as $count => $parallax): ?>

<div class="input-group">
    <span class="input-group-addon"><?php echo $parallax->name ?></span>
    <input type="file" name="parallax[]" class="form-control">
    <img src="<?php echo base_url() . $parallax->link; ?>" width="100px" height="100px">
</div>
<br>

<? endforeach; ?>

<br>

<input type="submit" class="btn btn-primary">

<?php echo form_close() ?>