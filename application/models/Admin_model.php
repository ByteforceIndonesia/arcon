<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    //About Us
    public function get_aboutus ()
    {
        return $this->db->get('about')->result();
    }
    
    public function aboutus_motto($data)
    {
        $this->db->set('value', $data['motto_text']);
        $this->db->where('field', 'motto_text');
        return $this->db->update('about');
    }
    
    public function aboutus_text ($data)
    {
        $this->db->set('value', $data['about_text']);
        $this->db->where('field', 'about_text');
        return $this->db->update('about');
    }
    
    //Teams
    public function get_teams ()
    {
        return $this->db->get('team')->result();
    }
    
    public function update_team ($count, $name, $phone, $email)
    {
        $this->db->set('name', $name);
        $this->db->set('phone', $phone);
        $this->db->set('email', $email);
        $this->db->where('id', $count+1);
        return $this->db->update('team');
    }
    
    //Projects
    public function get_projects ()
    {
        return $this->db->get('projects')->result();
    }
    
    public function insert_project($data)
    {
        return $this->db->insert('projects', $data);
    }
    
    public function make_freatured($uuid)
    {
        return $this->db->insert('gallery', array('project_uuid' => $uuid, 'freatured' => 1));
    }
    
    //Config
    public function get_config()
    {
        return $this->db->get('config')->result();
    }
    
}