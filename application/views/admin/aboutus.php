<?php echo form_open_multipart(base_url('admin/aboutus'), array('class' => 'form-inline')) ?>

<?php foreach ($aboutus as $data): ?>

<div class="input-group">
    <span class="input-group-addon">Entry :</span>
    <textarea name="<?php echo $data->field ?>" class="form-control">
        <?php echo $data->value ?>
    </textarea>
    <br><br>
    <input type="file" name="<?php echo $data->field . '_file' ?>" class="form-control">
    <img src="<?php echo base_url() . $data->images ?>" class="form-control" height="100px">
</div>

<br><br>

<?php endforeach; ?>

<br>
<div class="form-group">
    <input type="submit" class="btn btn-primary">
</div>

<?php echo form_close() ?>