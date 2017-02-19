
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/datatables.min.js"></script>

<h1>Project Overview</h1>
<hr width = "100%">

    <?php 
        if($this->session->flashdata('error'))
        { ?>
            <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php
        } 
    ?>

    <?php 
        if($this->session->flashdata('success'))
        {
            ?>
            <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php
        } 
    ?>

    <?php 
        if($this->session->flashdata('file'))
        {
            ?>
            <div class="alert alert-warning">
            <?php echo $this->session->flashdata('file'); ?>
            </div>
          <?php
        } 
    ?>
    
  <a href="<?php echo base_url('admin/project/new') ?>" class="btn btn-primary">
        New Project
    </a>
  <br><br>

  <table class="table table-bordered" id="projects" style="width:100%">
    <thead>
      <tr>
          <td>Num</td>
          <td>Project Name</td>
          <td>Project Catagory</td>
          <td>Project Freatured Image</td>
          <td>Actions</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($projects as $count => $project): ?>
          <tr>
              <td><?php echo $count+1; ?></td>
              <td><?php echo $project->name; ?></td>
              <td><?php echo $project->details; ?></td>
              <td>
                  <center>
                      <img src="<?php echo base_url() . $project->images; ?>" width="100px">
                  </center>
              </td>
              <td>
                  <a href="<?php echo base_url('admin/project/edit/' . $project->project_uuid) ?>"  class="btn btn-warning">Edit</a>
                  <a href="<?php echo base_url('admin/project/delete/' . $project->project_uuid) ?>"  class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<script type="text/javascript">
  $(document).ready( function () {
    $('#projects').DataTable();
  } );
</script>
