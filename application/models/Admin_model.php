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
    
    public function set_config($data)
    {
        foreach($data as $key => $value)
        {
            if($key == 'office_two')
            {
                $this->db->set('value_two', $value);
                $this->db->where('config_name', $key);
                $this->db->update('config');
                continue;
            }
            
            $this->db->set('value_one', $value);
            $this->db->where('config_name', $key);
            $this->db->update('config');
        }
    }
    
    public function set_company_logo ()
    {
        //If user Upload files
        if(!empty($_FILES['company_logo']))
        {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'png';
            $config['max_size']             = 7000;
            $config['overwrite']            = TRUE;
            $config['file_name']            = 'logo.png';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('company_logo'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $errors = array(

                        'error' => 'Error Updating About Us (Err:002a)',
                        'file'  => $error

                    );

                    $this->session->set_flashdata($errors);
                    return false;
            }
        }
    }
    
    public function set_home_sliders ()
    {
        //If user Upload files
        if(!empty($_FILES['home_slider']))
        {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'jpg';
            $config['max_size']             = 7000;
            $config['overwrite']            = TRUE;
            $config['file_name']            = 'home_slider.jpg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('home_slider'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $errors = array(

                        'error' => 'Error Updating About Us (Err:002a)',
                        'file'  => $error

                    );

                    $this->session->set_flashdata($errors);
                    return false;
            }
        }
    }
    
    public function set_gallery_banners ()
    {
        //If user Upload files
        if(!empty($_FILES['banner_residential']))
        {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'jpg';
            $config['max_size']             = 7000;
            $config['overwrite']            = TRUE;
            $config['file_name']            = 'home_slider.jpg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('home_slider'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $errors = array(

                        'error' => 'Error Updating About Us (Err:002a)',
                        'file'  => $error

                    );

                    $this->session->set_flashdata($errors);
                    return false;
            }
        }
        
        if(!empty($_FILES['banner_comercial']))
        {
            $config['upload_path']          = './assets/images/';
            $config['allowed_types']        = 'jpg';
            $config['max_size']             = 7000;
            $config['overwrite']            = TRUE;
            $config['file_name']            = 'home_slider.jpg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('home_slider'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $errors = array(

                        'error' => 'Error Updating About Us (Err:002a)',
                        'file'  => $error

                    );

                    $this->session->set_flashdata($errors);
                    return false;
            }
        }
    }
    
}