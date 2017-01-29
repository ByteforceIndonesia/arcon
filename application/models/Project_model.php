<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model
{	
    
    public function get($uuid)
    {
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->join('gallery', 'projects.project_uuid = gallery.project_uuid');
        $this->db->where('projects.project_uuid', $uuid);
        return $this->db->get()->row();
    }
    
}