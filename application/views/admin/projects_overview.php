<a href="<?php echo base_url('admin/project/new') ?>" class="btn btn-primary">
    New Project
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <td>Num</td>
        <td>Project Name</td>
        <td>Project Catagory</td>
        <td>Project Freatured Image</td>
        <td>Actions</td>
    </tr>
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
</table>