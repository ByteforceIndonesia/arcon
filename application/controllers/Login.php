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
            $data = $this->login_model->get_info();
            
            $userdata = array(
            
                'name'      => $data->name,
                'username'  => $data->username,
                'logged-in' => TRUE
                
            );
            
            $this->session->set_userdata($userdata);
             
            redirect(base_url('admin'));
        }else{
            session_destroy();
            $this->session->set_flashdata('login', "Wrong Password or Username!");
            $this->index();
        }
    }

    //Dev only
	public function new_user ()
	{
        if($this->input->post())
        {
            $data = array (
                
            'name'      => $this->input->post('name'),
            'username'  => $this->input->post('username'),
            'password'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                
            );
            
            if($this->login_model->new_user($data))
            {
                $this->session->set_flashdata('login', "Please Login Using Your Username and Password");
                $this->index();
            }else
            {
                $this->session->set_flashdata('login', "Creating Username Failed (Error - 001)");
                $this->index();
            }
            
        }else
        {
            $this->load->view('admin/logins/sign_up');
        }
	}
}
