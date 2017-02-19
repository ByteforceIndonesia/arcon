    <h1>Edit Project</h1>
    <br><br>
    <?php 
      echo form_open_multipart('admin/project/new');
      //For File Manager
      $this->session->set_flashdata('uuid', $project->project_uuid);
      // For uri
      $this->load->helper('url');
      $this->session->set_flashdata('uri', uri_string());
      ?>
      
      <div class="input-group">
        <span class="input-group-addon">Name</span>
        <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" value="<?php echo $project->name ?>">
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">Descr iption</span>
        <input type="text" class="form-control" placeholder="Desc" name="desc" autocomplete="off" value="<?php echo $project->description ?>">
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
        <span class="input-group-addon">File Manager</span>
        <a href="<?php echo base_url() ?>ex_cont">
          <button class="btn btn-primary" type="button">Click Here</button>
        </a>
      </div>
      <br>
      <div class="input-group">
        <button type="submit" class="float btn btn-primary">Make New Project</button>
        </div>
    <?php echo form_close (); ?>