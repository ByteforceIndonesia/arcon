<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{	
	private $username,$password;

	public function login ()
	{
		//Get the inputted username and password
		$this->username =  $this->input->post('username');
		$this->password =  $this->input->post('password');

		//Check Username on Database
		if($user = $this->db->get_where('admin', array('username' => $this->username))->row())
		{
			//Check Password
			return password_verify($this->password, $user->password);
		}else
		{
			return false;
		}
	}

    public function new_user($data)
    {
        return $this->db->insert('admin', $data);
    }
    
    public function get_info ()
    {
        return $this->db->get_where('admin', array('username' => $this->input->post('username')))->row();
    }
	
}