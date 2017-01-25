<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_model extends CI_Model
{	
	public function home_slider ()
	{
		return $this->db->get_where('config', array('config_name' => 'home_slider'))->row();
	}

    public function company_logo ()
	{
		return $this->db->get_where('config', array('config_name' => 'company_logo'))->row();
	}

    public function parallax ($id)
	{
		return $this->db->get_where('config', array('config_name' => 'parallax_' . $id))->row();
	}

    public function team_members ()
    {
        return $this->db->get('team')->result();
    }

    public function about ($id)
    {
        return $this->db->get_where('about', array('field' => $id . '_text'))->row();
    }

    public function gallery_banner ()
	{
		return $this->db->get_where('gallery', array('name' => 'banner'))->row();
	}
}