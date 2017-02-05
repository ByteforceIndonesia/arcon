<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct ()
    {
        //Call Inheritance
        parent::__construct();

        if(!$this->session->userdata('logged-in'))
        {
            redirect(base_url('login'));
        }else
        {
            $this->data['page_title']   = 'Admin | Arcon Indonesia';
        }
    }

	public function index ()
	{
        //$this->load->view('admin/template/header', $this->data);
        $this->load->view('admin/dashboard', $this->data);
        //$this->load->view('admin/template/footer', $this->data);
	}
    
    public function aboutus ()
    {
        if($this->input->post())
        {
            $data = array (
                
                'about_text' => $this->input->post('about_text'),
                'motto_text' => $this->input->post('motto_text')
                
            );
            
            if($this->admin_model->aboutus_text($data) && $this->admin_model->aboutus_motto($data))
            {
                //If user Upload files
                if($_FILES)
                {
                    $config['upload_path']          = './assets/images/about_us/';
                    $config['allowed_types']        = 'jpg';
                    $config['max_size']             = 5000;
                    $config['overwrite']            = TRUE;
                    
                    //About Text
                    if(!empty($_FILES['about_text_file']['name']))
                    {
                        $config['file_name']     = 'text';
                        
                        $this->load->library('upload', $config);
                        
                        if ( ! $this->upload->do_upload('about_text_file'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                $errors = array(

                                    'error' => 'Error Updating About Us (Err:002a)',
                                    'file'  => $error

                                );

                                $this->session->set_flashdata($errors);
                            
                                print_r($error);
                            exit;
                        }
                    }
                    
                    if(!empty($_FILES['motto_text_file']['name']))
                    {
                        $config['file_name']     = 'motto';
                        
                        $this->load->library('upload', $config);
                        //Motto Text
                        if ( ! $this->upload->do_upload('motto_text_file'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                $errors = array(

                                    'error' => 'Error Updating About Us (Err:002b)',
                                    'file'  => $error

                                );

                                $this->session->set_flashdata($errors);
                        }
                    }
                }
             
                $this->session->set_flashdata('success', 'Success Updating About Us');
                $this->index();   
            }else
            {
                $this->session->set_flashdata('error', 'Error Updating About Us (Err:002)');
                $this->index();
            }
        }else
        {
            $this->data['aboutus'] = $this->admin_model->get_aboutus();
            
            //$this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/aboutus', $this->data);
            //$this->load->view('admin/template/footer', $this->data);
        }
    }
    
    public function team ()
    {
        if($this->input->post())
        {
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            
            foreach($this->input->post('name') as $count => $name)
            {
                if(!$this->admin_model->update_team($count, $name, $phone[$count], $email[$count]))
                {
                    $this->session->set_flashdata('error', 'Error Updating Teams');
                    $this->index(); 
                }
            }
            
            //Check for any picture uploaded
            if(
                !empty($_FILES['image']['name'][0]) ||
                !empty($_FILES['image']['name'][1]) ||
                !empty($_FILES['image']['name'][2]) ||
                !empty($_FILES['image']['name'][3]) ||
                !empty($_FILES['image']['name'][4]) 
                )
            {
                //Config for upload class
                $config['upload_path']          = './assets/images/teams/';
                $config['allowed_types']        = 'jpg';
                $config['overwrite']            = TRUE;

                $this->load->library('upload', $config);
                
                foreach($_FILES['image']['name'] as $count => $name)
                {
                    $config['file_name']     = $count;
                    
                    if ( ! $this->upload->do_upload($name))
                    {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                    }
                }
            }
            
            $this->session->set_flashdata('success', 'Success Updating About Us');
            $this->index(); 
            
        }else
        {
            $this->data['teams'] = $this->admin_model->get_teams();
            
            //$this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/teams', $this->data);
            //$this->load->view('admin/template/footer', $this->data);
        }
    }
    
    public function config ()
    {
        if($this->input->post())
        {
            
        }else
        {
            $this->data['config'] = $this->admin_model->get_teams();
            
            //$this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/config', $this->data);
            //$this->load->view('admin/template/footer', $this->data);  
        }
    }
    
    public function project ()
    {
        $this->data['projects'] = $this->admin_model->get_projects();
        
        switch($page)
        {
            case '':
            {
                //$this->load->view('admin/template/header', $this->data);
                $this->load->view('admin/projects', $this->data);
                //$this->load->view('admin/template/footer', $this->data);
            }break;
                
            case 'new':
            {
                if($this->input->post())
                {
                    
                }else
                {
                    //$this->load->view('admin/template/header', $this->data);
                    $this->load->view('admin/new_project', $this->data);
                    //$this->load->view('admin/template/footer', $this->data);
                }
            }break;
        }
    }
    
    public function logout ()
    {
        session_destroy();
        redirect(base_url());
    }

    
}
