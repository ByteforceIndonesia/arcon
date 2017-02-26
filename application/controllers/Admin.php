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
        $this->load->view('admin/template/header', $this->data);
        $this->load->view('admin/dashboard', $this->data);
        $this->load->view('admin/template/footer', $this->data);
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
                    // About Text
                    $this->crud_model->uploadSingular(
                            './assets/images/about_us/',
                            'jpg',
                            'about_text_file',
                            'text'
                        );

                    // About Text
                    $this->crud_model->uploadSingular(
                            './assets/images/about_us/',
                            'jpg',
                            'motto_text_file',
                            'motto'
                        );
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

            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/aboutus', $this->data);
            $this->load->view('admin/template/footer', $this->data);
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
                // Upload Images
                $this->crud_model->uploadMultiple(
                    './assets/images/team/', 
                    'jpg', 
                    'image'
                    );
            }

            $this->session->set_flashdata('success', 'Success Updating About Us');
            $this->index();

        }else
        {
            $this->data['teams'] = $this->admin_model->get_teams();

            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/teams', $this->data);
            $this->load->view('admin/template/footer', $this->data);
        }
    }

    public function config ()
    {
        if($this->input->post())
        {
            $data = array
                (

                    'page_title'    => $this->input->post('page_title'),
                    'office_one'    => $this->input->post('office_one'),
                    'office_two'    => $this->input->post('office_two'),
                    'contact_us'    => $this->input->post('contact_us')

                );

            $this->admin_model->set_config($data);

            foreach($_FILES as $field => $file)
            {
                switch($field)
                {
                    case 'company_logo':
                    {
                        if(!empty($file['name']))
                        {
                            $this->crud_model->uploadSingular(
                                './assets/images/',
                                'png',
                                'company_logo',
                                'logo.png'
                                );
                        }
                    }break;

                    case 'banner_comercial':
                    {
                        if(!empty($file['name']))
                        {
                            $this->crud_model->uploadSingular(
                                './assets/images/',
                                'jpg',
                                'banner_comercial',
                                'comercial.jpg'
                                );
                        }
                    }break;

                    case 'banner_residential':
                    {
                        if(!empty($file['name']))
                        {
                            $this->crud_model->uploadSingular(
                                './assets/images/',
                                'jpg',
                                'banner_residential',
                                'comercial.jpg'
                                );
                        }
                    }break;
                }
            }

            $this->session->set_flashdata('success', 'Success editing website configuration');
            $this->index();

        }else
        {
            $this->data['config'] = $this->admin_model->get_config();

            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/config', $this->data);
            $this->load->view('admin/template/footer', $this->data);
        }
    }

    public function project ($page = '', $uuid = '')
    {
        $this->data['projects'] = $this->admin_model->get_projects();

        switch($page)
        {
            case '':
            {
                $this->data['projects'] = $this->admin_model->get_projects();

                $this->load->view('admin/template/header', $this->data);
                $this->load->view('admin/projects_overview', $this->data);
                $this->load->view('admin/template/footer', $this->data);
            }break;

            case 'return':
            {
                $this->data['projects'] = $this->admin_model->get_projects();

                $this->load->view('admin/template/header', $this->data);
                $this->load->view('admin/projects_overview', $this->data);
                $this->load->view('admin/template/footer', $this->data);
            }break;

            case 'delete':
            {
                //Get Project details
                $project = $this->admin_model->get_project($uuid);
                //Check if project available in gallery
                if($this->admin_model->get_project_gallery($uuid))
                {
                    $this->admin_model->delete_gallery($uuid);
                }

                if($this->admin_model->delete_project($uuid))
                {
                    $this->admin_model->recursiveRemoveDirectory(base_url() . $project->datas);
                    $this->session->set_flashdata('success', 'Delete Flashdata Success');
                    $this->project();
                }
            }break;

            case 'edit':
            {
                if($this->input->post())
                {
                    //Put data in array
                    $uuid = $this->input->post('uuid');
                    $data = array (

                        'name'                  => $this->input->post('name'),
                        'description'           => $this->input->post('desc'),
                        'details'               => $this->input->post('catagory')

                        );

                    //Changes in gallery table
                    if($this->input->post('freatured') == 1)
                    {
                        $this->admin_model->change_freatured($uuid, 1);
                    }else {
                        $this->admin_model->change_freatured($uuid, 0);
                    }

                    //Freatured Pic Upload
                    if(!empty($_FILES['freatured']['name']))
                    {
                        $this->crud_model->uploadSingular(
                                './assets/images/projects/' . $data['details'] . '/' . $uuid . '/freatured',
                                'jpg',
                                'freatured',
                                'freatured.jpg'
                                );
                    }

                    //Update
                    if(!$this->admin_model->update_project($data,$uuid))
                    {
                        $this->session->set_flashdata('error', 'Success Inserting into database');
                        redirect(baseurl('admin/project'));
                        exit;
                    }

                    $this->session->set_flashdata('success', 'Success Adding Edit Project');
                    unset($_POST);
                    redirect(base_url('admin/project'));
                    exit;
                }else
                {
                    $this->data['project'] = $this->admin_model->get_project($uuid);

                    $this->load->view('admin/template/header', $this->data);
                    $this->load->view('admin/edit_project', $this->data);
                    $this->load->view('admin/template/footer', $this->data);
                }
            }break;

            case 'new':
            {
                if($this->input->post())
                {
                    //Put data in array
                    $data = array (

                        'project_uuid'      => uniqid(),
                        'name'                => $this->input->post('name'),
                        'description'         => $this->input->post('desc'),
                        'details'            => $this->input->post('catagory')

                        );

                    $data['images'] = 'assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid'] . '/freatured';

                    $data['datas'] = 'assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid'];

                    //Changes in gallery table
                    if($this->input->post('freatured') == 1)
                    {
                        $this->admin_model->make_freatured($data['project_uuid'], 1);
                    }else {
                        $this->admin_model->make_freatured($data['project_uuid'], 0);
                    }

                    //Make directory
                    $this->crud_model->makeDirectoryProject(
                        $this->input->post('catagory'),
                        $data['project_uuid']
                        );

                    //Freatured Pic Upload
                    if($_FILES['freatured'])
                    {
                        $this->crud_model->uploadSingular(
                        './' . $data['images'],
                        'jpg',
                        'freatured',
                        'freatured.jpg'
                        );
                    }

                    //Design File Uploads
                    if($_FILES['design'])
                    {
                        $this->crud_model->uploadMultiple(
                            './' . $data['datas'] . '/design/',
                            'jpg|png|docx|pdf',
                            'design'
                            );
                    }

                    //Result File Uploads
                    if($_FILES['result'])
                    {
                        $this->crud_model->uploadMultiple(
                            './' . $data['datas'] . '/result/',
                            'jpg|png|docx|pdf',
                            'result'
                            );
                    }

                    $data['images'] = $data['images'] . '/freatured.jpg';

                    //Insert
                    if(!$this->admin_model->insert_project($data))
                    {
                        $this->session->set_flashdata('error', 'Error Adding New Project');
                        unset($_POST);
                        redirect(base_url('admin'));
                        exit;
                    }

                    $this->session->set_flashdata('success', 'Success Adding New Project');
                    unset($_POST);
                    redirect(base_url('admin/project'));
                    exit;
                }else
                {
                    $this->load->view('admin/template/header', $this->data);
                    $this->load->view('admin/new_project', $this->data);
                    $this->load->view('admin/template/footer', $this->data);
                }
            }break;
        }
    }

    public function parallax ()
    {
        if($_FILES)
        {
            if($this->crud_model->uploadMultiple(
                './assets/images/parallax/',
                'jpg',
                'parallax'
                ))
            {
                //Success
                $this->session->set_flashdata('success', 'Success Editing Parallax Images');
                $this->index();
            }
        }else
        {
            $this->data['parallaxes'] = $this->admin_model->get_parallax();

            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/parallax', $this->data);
            $this->load->view('admin/template/footer', $this->data);
        }
    }

    public function sliders ()
    {
      if($_FILES)
      {
        if($this->crud_model->uploadMultiple(
                './assets/images/slider/',
                'jpg',
                'slider'
                ))
            {
              //Success
              $this->session->set_flashdata('success', 'Success Editing Sliders Images');
              $this->index();
            }
      }else
      {
          $this->data['sliders'] = glob('./assets/images/slider/*');

          $this->load->view('admin/template/header', $this->data);
          $this->load->view('admin/slider', $this->data);
          $this->load->view('admin/template/footer', $this->data);
      }
    }

    public function change_user ()
    {
        if($this->input->post())
        {
            $username   = $this->input->post('username');
            $new_pass   = $this->input->post('password_new');
            $old_pass   = $this->input->post('password_old');

            $user = $this->admin_model->get_user($username);

            if(password_verify($old_pass, $user->password))
            {
                // Hash password
                $new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

                //Update DB
                $this->admin_model->change_password($user->username, $username, $new_pass);
                $this->session->set_flashdata('success', 'Success Account Settings');
                redirect('admin');
                exit;
            }

        }else
        {
            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/user', $this->data);
            $this->load->view('admin/template/footer', $this->data);
        }
    }

    public function logout ()
    {
        session_destroy();
        redirect(base_url());
    }


}
