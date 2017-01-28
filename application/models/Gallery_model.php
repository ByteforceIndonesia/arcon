<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends CI_Model
{	
    public function freatured ()
    {
        $this->db->limit(10);
        return $this->db->get_where('gallery', array('freatured' => 1))->result();
    }

    public function all($id)
    {
        return $this->db->get_where('gallery', array('details' => $id))->result();
    }

}