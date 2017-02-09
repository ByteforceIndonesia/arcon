<?php echo form_open_multipart (base_url('admin/team')) ?>

<?php foreach ($teams as $person): ?>

    <div class="input-group">
        <h3>Person :</h3>
    </div>

    <div class="input-group">
        <span class="input-group-addon">Name : </span>
        <input type="text" name="name[]" value="<?php echo $person->name ?>" class="form-control">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon">Phone : </span>
        <input type="text" name="phone[]" value="<?php echo $person->phone ?>" class="form-control">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon">Email : </span>
        <input type="text" name="email[]" value="<?php echo $person->email ?>" class="form-control">
    </div><br>
    <div class="input-group">
        <span class="input-group-addon">Picture : </span>
        <input type="file" name="image[]" class="form-control">
    </div><br>

    <br><br>

<?php endforeach; ?>
    
    <div class="input-group">
        <input type="submit" class="btn btn-primary">
    </div>

<?php echo form_close () ?>