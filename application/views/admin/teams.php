<?php echo form_open_multipart (base_url('admin/team')) ?>

<?php foreach ($teams as $person): ?>
    
    <br>
    Name : <input type="text" name="name[]" value="<?php echo $person->name ?>">
    <br>
    Phone : <input type="text" name="phone[]" value="<?php echo $person->phone ?>">
    <br>
    Email : <input type="text" name="email[]" value="<?php echo $person->email ?>">
    <br>
    Image : <input type="file" name="image[]">
    <br>

<?php endforeach; ?>

    <br>
    <input type="submit" >

<?php echo form_close () ?>