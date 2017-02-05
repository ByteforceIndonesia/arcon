<?php echo form_open_multipart(base_url('admin/aboutus')) ?>

<?php foreach ($aboutus as $data): ?>

    <textarea name="<?php echo $data->field ?>">
        <?php echo $data->value ?>
    </textarea>

    <input type="file" name="<?php echo $data->field . '_file' ?>">
    
    <br>

<?php endforeach; ?>

<br>

<input type="submit">

<?php echo form_close() ?>