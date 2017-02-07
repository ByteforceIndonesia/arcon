<?php echo form_open_multipart(base_url('admin/config')) ?>

<h4 class="danger">Logo File .png, everything else in jpg</h4>

Page Title : <input type="text" name="page_title" value="<?php echo $config[2]->value_one; ?>">

<br>

Office one : <textarea name="office_one"><?php echo $config[5]->value_one; ?></textarea>

<br>

Office two : <textarea name="office_two"><?php echo $config[5]->value_two; ?></textarea>

<br>

Contact us : <textarea name="contact_us"><?php echo $config[6]->value_one; ?></textarea>

<br>

Company Logo : <input type="file" name="company_logo">
<img src="<?php echo base_url() . '/' . $config[1]->value_one; ?>" width="100px">

<br>

Home Slider : <input type="file" name="home_slider">
<img src="<?php echo base_url() . '/' . $config[0]->value_one; ?>" width="100px">

<br>

Gallery Banner Comercial : <input type="file" name="banner_comercial">
<img src="<?php echo base_url() . '/' . $config[3]->value_one; ?>" width="100px">

<br>

Gallery Banner Residential : <input type="file" name="banner_residential">
<img src="<?php echo base_url() . '/' . $config[4]->value_one; ?>" width="100px">

<br>

<input type="submit">

<?php echo form_close() ?>