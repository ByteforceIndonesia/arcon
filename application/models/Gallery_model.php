<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model
{	
    public function freatured ()
    {
        $this->db->limit(10);
        $this->db->from('gallery');
        $this->db->join('projects', 'gallery.project_uuid = projects.project_uuid');
        $this->db->where('freatured', 1);
        return $this->db->get()->result();
    }

    public function all($id)
    {
        $this->db->from('gallery');
        $this->db->join('projects', 'gallery.project_uuid = projects.project_uuid');
        $this->db->where('details', $id);
        return $this->db->get()->result();
    }

}