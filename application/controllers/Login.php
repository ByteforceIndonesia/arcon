<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct ()
    {
        parent::__construct();
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

    //Dev only
	public function new_user ()
	{

	}
}
