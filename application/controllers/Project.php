<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller {

    function __construct ()
    {
        parent::__construct();

    }

    public function index($uuid)
    {
        if($uuid == '')
        {
            redirect(base_url());
        }else
        {
            $this->data['project'] = $this->project_model->get($uuid);

            $this->load->view('template/headerb', $this->data);
            $this->load->view('frontpages/project', $this->data);
            $this->load->view('template/footerb', $this->data);
        }
    }

}
