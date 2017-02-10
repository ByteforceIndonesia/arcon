<html>
<head>

    <title><?php echo $page_title ?></title>
    
<style>
body {
  margin : 0px;
  padding : 0px;
}
.sidebar{
background-color : rgb(27, 38, 73);
width : 25%;
height : 100%;
  float : left;
  position : relative;

}

.sidebar ul {
  padding-left : 0px;
}

.sidebar ul li{
  width : auto;
  padding : 20px;
  padding-left : 25px;
  list-style : None;
  transition : 0.3s all ease;
}

.sidebar ul a {
  color : white;
  text-decoration : none;
}
.sidebar ul li:hover {
  font-weight : 600;
  background-color : rgb(43, 86, 149);
}


.contentUpdate{
  float : left;
  position : relative;
  width : 75%;
  padding : 25px;
}
</style>

<!--Jquery-->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
    
<!--Tether IO-->
<script src="<?php echo base_url() ?>assets/js/tether.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/tether.min.css">

<!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
<!--Tiny MCE-->
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
    
</head>
    <body>
<div class="sidebar">
    <ul>
        <a href="<?php echo base_url('admin') ?>">
            <li>
                <h1 style="color:#fff">Arcon Indonesia Admin</h1>
            </li>
        </a>
        
        <a href="<?php echo base_url('admin/config') ?>">
            <li>
                Website Config
            </li>
        </a>
        
        <a href="<?php echo base_url('admin/parallax') ?>">
            <li>
                Parallax Settings
            </li>
        </a>
        
        <a href="<?php echo base_url('admin/aboutus') ?>">
            <li>
                Edit About Us
            </li>
        </a>
        
        <a href="<?php echo base_url('admin/team') ?>">
            <li>
                Edit Teams
            </li>
        </a>
        
        <a href="<?php echo base_url('admin/project') ?>">
            <li>
                Projects
            </li>
        </a>
        
         <a href="<?php echo base_url('admin/logout') ?>">
             <li>
           Logout
            </li>
        </a>
        
    </ul>
</div>
<div class="contentUpdate" style="overflow: auto;
max-height: 100vh;">