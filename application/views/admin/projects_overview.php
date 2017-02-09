<table class="table table-bordered">
    <tr>
        <td>ID</td>
        <td>Project Name</td>
        <td>Project Catagory</td>
        <td>Project Freatured Image</td>
        <td>Actions</td>
    </tr>
    <?php foreach ($projects as $project): ?>
        <tr>
            <td><?php echo $project->id; ?></td>
            <td><?php echo $project->name; ?></td>
            <td><?php echo $project->details; ?></td>
            <td>
                <img src="<?php echo base_url() . $project->images; ?>" width="100px">
            </td>
            <td>
                <a href="<?php echo base_url('admin/project/edit/' . $project->project_uuid) ?>">Edit</a>
                <a href="<?php echo base_url('admin/project/delete/' . $project->project_uuid) ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>