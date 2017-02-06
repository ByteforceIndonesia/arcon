<?php echo form_open_multipart(base_url('admin/config')) ?>

Page Title : <input type="text" name="page_title" value="<?php echo $config[2]->value_one; ?>">

<br>

Office one : <textarea name="office_one"><?php echo $config[5]->value_one; ?></textarea>

<br>

Office two : <textarea name="office_two"><?php echo $config[5]->value_two; ?></textarea>

<br>

Contact us : <textarea name="contact_us"><?php echo $config[6]->value_one; ?></textarea>

<br>

Company Logo : <input type="file" name="company_logo">
<img src="<?php echo base_url() . '/' . "

<br>

<input type="submit">

<?php echo form_close() ?>