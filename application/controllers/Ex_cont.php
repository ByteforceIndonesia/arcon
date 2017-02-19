<?php

class ex_cont extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
  }

  function index ()
  {
    $data['uuid']         = $this->session->flashdata('uuid');
    $data['page_title']   = 'Admin | Arcon Indonesia';

    $this->load->view('admin/template/header', $data);
    $this->load->view('frontpages/elfinder', $data);
    $this->load->view('admin/template/footer', $data);
  }

  function elfinder_init($uuid)
  {
    // Get path from database
    $path = $this->admin_model->get_project($uuid)->datas;

    $this->load->helper('path');
      $opts = array(
      // 'debug' => true, 
      'roots' => array(
        array( 
          'driver' => 'LocalFileSystem', 
          'path'   => set_realpath($path), 
          'attributes' => array(
                array(
                    'read'    => true,
                    'write'   => true,
                    'locked'  => true
                )
              ),
          'defaults' => array(
            'read' => true, 
            'write' => true
            )
          // 'URL'    => site_url($path) . '/'
          // more elFinder options here
        ) 
      )
    );
    $this->load->library('elfinder_lib', $opts);
  }

}

?>