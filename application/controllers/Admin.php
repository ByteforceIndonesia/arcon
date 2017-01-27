<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct ()
    {
        //Call Inheritance
        parent::__construct();

        if(!$this->session->userdata())
        {
            redirect(base_url('login'));
        }else{
            echo 'hello';
            print_r($this->session->userdata('logged-in'));
        }
    }

	public function index ()
	{
		$this->load->view('admin/logins/login_form');
	}

    public function login()
    {
        if($this->login_model->login())
        {
                
        }else{
            
        }
    }
}
