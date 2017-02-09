
<h1>Dashboard</h1>
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