<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{	
	private $username,$password;

	public function login ()
	{
		if($this->input->post)
		{
			if($this->login_model->login())
			{
				echo 'masuk';
			}else
			{
				echo 'ga masuk';
			}
		}else
		{
			$this->load->view('admin/login_form');
		}
	}
}