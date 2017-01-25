<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index ()
	{
		$this->load->view('logins/login_form');
	}

    public function login()
    {
        if($this->login_model->login())
        {
                
        }else{
            
        }
    }
}
