<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/datatables.min.js"></script>

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
