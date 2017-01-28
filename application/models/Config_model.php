<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_model extends CI_Model
{	

	public function page_title ()
	{
		return $this->db->get_where('config', array('config_name' => 'page_title'))->row();
	}

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
		return $this->db->get_where('parallax', array('name' => 'parallax_' . $id))->row();
	}

    public function team_members ()
    {
        return $this->db->get('team')->result();
    }

    public function about ($id)
    {
        return $this->db->get_where('about', array('field' => $id . '_text'))->row();
    }

    public function gallery_banner ($id)
	{
		return $this->db->get_where('config', array('config_name' => 'gallery_banner_' . $id))->row()->value_one;
	}

	public function galleries_freatured ()
	{
		return $this->db->get_where('gallery', array('name !=' => 'banner', 'freatured' => 1))->result();
	}

	public function whatwedo ()
	{
		return $this->db->get_where('whatwedo')->result();
	}

	public function offices ()
	{
		return $this->db->get_where('config', array('config_name' => 'offices'))->row();
	}

	public function contact_us ()
	{
		return $this->db->get_where('config', array('config_name' => 'contact_us'))->row();
	}
}