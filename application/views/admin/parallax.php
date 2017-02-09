<?php echo form_open_multipart(base_url('admin/parallax')) ?>

<h4 class="danger">upload in jpg</h4>

<?php foreach($parallaxes as $count => $parallax): ?>

<?php echo $parallax->name ?> : <input type="file" name="parallax[]">
<img src="<?php echo base_url() . $parallax->link; ?>" width="100px">

<br>

<? endforeach; ?>

<br>

<input type="submit">

<?php echo form_close() ?>