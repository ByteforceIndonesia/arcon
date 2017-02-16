    <h1>New Project</h1>
    <br><br>
    <?php echo form_open_multipart('admin/project/new') ?>
      
      <div class="input-group">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off">
          </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Description</span>
        <input type="text" class="form-control" placeholder="Desc" name="desc" autocomplete="off">
          </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon">Catagory</span>
          <select name="catagory" class="form-control">
              <option value="residential">Residential</option>
              <option value="comercial">Commercial</option>
              <option value="others">Others</option>
          </select>
          </div>
      <br>
      <div class="input-group">
          <span class="input-group-addon">Freatured</span>
          <select name="freatured" class="form-control">
              <option value="1">Yes</option>
              <option value="0">No</option>
          </select>
          </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Freatured Image</span>
        <input type="file" class="form-control" placeholder="Freatured Image" name="freatured" autocomplete="off">
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Design Imgaes</span>
        <input type="file" class="form-control" placeholder="Images" name="design[]" autocomplete="off" multiple>
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Result Images</span>
        <input type="file" class="form-control" placeholder="Images" name="result[]" autocomplete="off" multiple>
      </div>
      <br>
      <div class="input-group">
        <button type="submit" class="float btn btn-primary">Make New Project</button>
        </div>
    <?php echo form_close (); ?>