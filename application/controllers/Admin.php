<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct ()
    {
        //Call Inheritance
        parent::__construct();

        if(!$this->session->userdata('logged-in'))
        {
            redirect(base_url('login'));
        }else{
            echo 'hello';
            print_r($this->session->userdata('logged-in'));
        }
    }

	public function index ()
	{
        $this->load->view('admin/template/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
	}

    public function config ()
    {
        if($this->input->post())
        {
            
        }else
        {

        }
    }
}
