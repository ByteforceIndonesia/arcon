<body>
    
    <?php 
        if($this->session->flashdata('error'))
        {
            echo $this->session->flashdata('error');
        }else if($this->session->flashdata('file'))
        {
            print_r ($this->session->flashdata('file'));
        }else if($this->session->flashdata('success'))
        {
            echo $this->session->flashdata('success');
        }
    ?>
    
    <ul>
        <li>
            <a href="<?php echo base_url('admin/aboutus') ?>">Edit About Us</a>
        </li>
        
        
        <li>
            <a href="<?php echo base_url('admin/team') ?>">Edit Teams</a>
        </li>
        
        
        <li>
            <a href="<?php echo base_url('admin/project') ?>">Edit Projects</a>
        </li>
        
        <li>
            <a href="<?php echo base_url('admin/config') ?>">Config</a>
        </li>
        
        <li>
            <a href="<?php echo base_url('admin/logout') ?>">Logout</a>
        </li>
        
    </ul>
</body>