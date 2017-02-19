<?php echo form_open_multipart(base_url('admin/config')) ?>
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="alert alert-warning">
                <p>Logo File .png, everything else in jpg</p>
            </div>
        
            <div class="input-group">
                <span class="input-group-addon">Page Title : </span>
                <input type="text" name="page_title" value="<?php echo $config[1]->value_one; ?>" class="form-control">
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Office One : </span>
                <textarea name="office_one" class="form-control"><?php echo $config[4]->value_one; ?></textarea>
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Office Two : </span>
                <textarea name="office_two" class="form-control"><?php echo $config[4]->value_two; ?></textarea>
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Contact Us : </span>
                <textarea name="contact_us" class="form-control">
                    <?php echo $config[5]->value_one; ?>
                </textarea>
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Company Logo : </span>
                <input type="file" name="company_logo" class="form-control">
                <img src="<?php echo base_url() . $config[0]->value_one; ?>" width="100px" height="100px" class="form-control">
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Commercial Banner : </span>
                <input type="file" name="banner_comercial" class="form-control">
                <img src="<?php echo base_url() . $config[2]->value_one; ?>" width="100px" height="100px" class="form-control">
            </div>

            <br><br>

            <div class="input-group">
                <span class="input-group-addon">Residential Banner : </span>
                <input type="file" name="banner_residential" class="form-control">
                <img src="<?php echo base_url() . $config[3]->value_one; ?>" width="100px" height="100px" class="form-control">
            </div>
                
            <br><br>

            <div class="input-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>