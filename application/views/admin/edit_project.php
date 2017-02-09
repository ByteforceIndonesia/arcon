<h1>Edit Project</h1>
 <br><br>   
    <?php echo form_open_multipart('admin/project/new') ?>
      
      <div class="input-group">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" value="<?php echo $project->name ?>">
          </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Description</span>
        <input type="text" class="form-control" placeholder="Desc" name="desc" autocomplete="off" value="<?php echo $project->description ?>">
          </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon">Catagory</span>
          <select name="catagory" class="form-control">
              <option value="residential">Residential</option>
              <option value="comercial">Comercial</option>
              <option value="others">Others</option>
          </select>
          </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon">Freatured</span>
          <select name="freatured" class="form-control" >
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
          </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Freatured</span>
        <input type="file" class="form-control" placeholder="Freatured Image" name="freatured" autocomplete="off">
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Multiple Image Upload</span>
        <input type="file" class="form-control" placeholder="Images" name="data[]" autocomplete="off" multiple>
      </div>
      <br>
        <button type="submit" class="float btn btn-primary">Edit Project</button>
    <?php echo form_close (); ?>