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
                            $errors = $this->upload->display_errors();
                            $this->session->set_flashdata('file', $errors);
                            redirect(base_url('admin'));
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
                //Config for upload class
                $config['upload_path']          = './assets/images/team/';
                $config['allowed_types']        = 'jpg';
                $config['overwrite']            = TRUE;

                $this->load->library('upload', $config);

                //Data File Uploads
                if($_FILES['image'])
                {
                    //Store the array
                    $files = $_FILES;

                    for($i = 0; $i < count($files['image']['name']); $i++)
                    {
                        if(!empty($files['image']['name'][$i]))
                        {
                            //Tricks the system as if we're uploading one file
                            $_FILES['img']['name']= $files['image']['name'][$i];
                            $_FILES['img']['type']= $files['image']['type'][$i];
                            $_FILES['img']['tmp_name']= $files['image']['tmp_name'][$i];
                            $_FILES['img']['error']= $files['image']['error'][$i];
                            $_FILES['img']['size']= $files['image']['size'][$i];

                            $config['file_name']    = $i+1;
                            $this->upload->initialize($config);

                            if ( !$this->upload->do_upload('img') )
                            {
                                $errors = $this->upload->display_errors();
                                $this->session->set_flashdata('file', $errors);
                                redirect(base_url('admin'));
                                exit;
                            }
                        }
                    }
                }
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
                            $config['file_name']            = 'logo.png';
                            $config['allowed_types']        = 'png';
                            $config['upload_path']          = './assets/images/';
                            $config['max_size']             = 7000;
                            $config['overwrite']            = TRUE;

                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);

                             if ( ! $this->upload->do_upload('company_logo'))
                                {
                                        $error = array('error' => $this->upload->display_errors());

                                        $this->session->set_flashdata($errors);
                                        return false;
                                }
                        }
                    }break;

                    case 'banner_comercial':
                    {
                        if(!empty($file['name']))
                        {
                            $config['file_name']            = 'comercial.jpg';
                            $config['allowed_types']        = 'jpg';
                            $config['upload_path']          = './assets/images/';
                            $config['max_size']             = 7000;
                            $config['overwrite']            = TRUE;

                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);

                             if ( ! $this->upload->do_upload('banner_comercial'))
                                {
                                    $errors = $this->upload->display_errors();
                                    $this->session->set_flashdata('file', $errors);
                                    redirect(base_url('admin'));
                                    exit;
                                }
                        }
                    }break;

                    case 'banner_residential':
                    {
                        if(!empty($file['name']))
                        {
                            $config['file_name']            = 'residential.jpg';
                            $config['allowed_types']        = 'jpg';
                            $config['upload_path']          = './assets/images/';
                            $config['max_size']             = 7000;
                            $config['overwrite']            = TRUE;

                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);

                             if ( ! $this->upload->do_upload('banner_residential'))
                                {
                                    $errors = $this->upload->display_errors();
                                    $this->session->set_flashdata('file', $errors);
                                    redirect(base_url('admin'));
                                    exit;
                                }
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
                        //Config for upload class
                        $config['upload_path']          = './assets/images/projects/' . $data['details'] . '/' . $uuid . '/freatured';
                        $config['allowed_types']        = 'jpg';
                        $config['overwrite']            = TRUE;
                        $config['file_name']            = 'freatured.jpg';

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if(!$this->upload->do_upload('freatured'))
                        {
                            $errors = $this->upload->display_errors();
                            $this->session->set_flashdata('file', $errors);
                            redirect(base_url('admin/project'));
                            exit;
                        }
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
                    if(!mkdir('./assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid']))
                    {
                        $this->session->set_flashdata('error', 'Create folder error');
                        $_POST = '';
                        redirect(base_url('admin'));
                        exit;
                    }else
                    {
                        if(!mkdir('./assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid'] . '/freatured'))
                        {
                            $this->session->set_flashdata('error', 'Create folder error');
                            $_POST = '';
                            redirect(base_url('admin'));
                            exit;
                        }

                        if(!mkdir('./assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid'] . '/result'))
                        {
                            $this->session->set_flashdata('error', 'Create folder error');
                            $_POST = '';
                            redirect(base_url('admin'));
                            exit;
                        }

                        if(!mkdir('./assets/images/projects/' . $this->input->post('catagory') . '/' . $data['project_uuid'] . '/design'))
                        {
                            $this->session->set_flashdata('error', 'Create folder error');
                            $_POST = '';
                            redirect(base_url('admin'));
                            exit;
                        }
                    }

                    //Freatured Pic Upload
                    if($_FILES['freatured'])
                    {
                        //Config for upload class
                        $config['upload_path']          = './' . $data['images'];
                        $config['allowed_types']        = 'jpg';
                        $config['overwrite']            = TRUE;
                        $config['file_name']            = 'freatured.jpg';

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if(!$this->upload->do_upload('freatured'))
                        {
                            $errors = $this->upload->display_errors();
                            $this->session->set_flashdata('file', $errors);
                            redirect(base_url('admin/project'));
                            exit;
                        }
                    }

                    //Design File Uploads
                    if($_FILES['design'])
                    {
                        //Config for upload class
                        $config['upload_path']          = './' . $data['datas'] . '/design/';
                        $config['allowed_types']        = 'jpg|png|docx|pdf';

                        $this->load->library('upload');

                        //Store the array
                        $files = $_FILES;

                        for($i = 0; $i < count($_FILES['design']['name']); $i++)
                        {
                            if(!empty($_FILES['design']['name'][$i]))
                            {
                                //Tricks the system as if we're uploading one file
                                $_FILES['img']['name']= $files['design']['name'][$i];
                                $_FILES['img']['type']= $files['design']['type'][$i];
                                $_FILES['img']['tmp_name']= $files['design']['tmp_name'][$i];
                                $_FILES['img']['error']= $files['design']['error'][$i];
                                $_FILES['img']['size']= $files['design']['size'][$i];

                                $config['file_name']  = $i . '.jpg';
                                $this->upload->initialize($config);

                                if ( !$this->upload->do_upload('img') )
                                {
                                    $errors = $this->upload->display_errors();
                                    $this->session->set_flashdata('file', $errors);
                                    redirect(base_url('admin/project'));
                                    exit;
                                }
                            }
                        }
                    }

                    //Result File Uploads
                    if($_FILES['result'])
                    {
                        //Config for upload class
                        $config['upload_path']          = './' . $data['datas'] . '/result/';
                        $config['allowed_types']        = 'jpg|png|docx|pdf';

                        $this->load->library('upload');

                        //Store the array
                        $files = $_FILES;

                        for($i = 0; $i < count($_FILES['result']['name']); $i++)
                        {
                            if(!empty($_FILES['result']['name'][$i]))
                            {
                                //Tricks the system as if we're uploading one file
                                $_FILES['img']['name']= $files['result']['name'][$i];
                                $_FILES['img']['type']= $files['result']['type'][$i];
                                $_FILES['img']['tmp_name']= $files['result']['tmp_name'][$i];
                                $_FILES['img']['error']= $files['result']['error'][$i];
                                $_FILES['img']['size']= $files['result']['size'][$i];

                                $config['file_name']  = $i . '.jpg';
                                $this->upload->initialize($config);

                                if ( !$this->upload->do_upload('img') )
                                {
                                    $errors = $this->upload->display_errors();
                                    $this->session->set_flashdata('file', $errors);
                                    redirect(base_url('admin/project'));
                                    exit;
                                }
                            }
                        }
                    }

                    $data['images'] = $data['images'] . '/freatured.jpg';

                    //Insert
                    if(!$this->admin_model->insert_project($data))
                    {
                        return 'error inserting into database';
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
            //Config for upload class
            $config['upload_path']          = './assets/images/parallax/';
            $config['allowed_types']        = 'jpg';
            $config['overwrite']            = TRUE;

            $this->load->library('upload', $config);

            //Backup the variable
            $files = $_FILES;

            for($i = 0; $i < count($files['parallax']['name']); $i++)
            {
                if(!empty($files['parallax']['name'][$i]))
                {
                    //Tricks the system as if we're uploading one file
                    $_FILES['img']['name']= $files['parallax']['name'][$i];
                    $_FILES['img']['type']= $files['parallax']['type'][$i];
                    $_FILES['img']['tmp_name']= $files['parallax']['tmp_name'][$i];
                    $_FILES['img']['error']= $files['parallax']['error'][$i];
                    $_FILES['img']['size']= $files['parallax']['size'][$i];

                    $config['file_name']    = $i+1;
                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload('img'))
                    {
                        $errors = $this->upload->display_errors();
                        $this->session->set_flashdata('file', $errors);
                        redirect(base_url('admin'));
                        exit;
                    }
                }
            }

            //Success
            $this->session->set_flashdata('success', 'Success Editing Parallax Images');
            $this->index();

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
          //Config for upload class
          $config['upload_path']          = './assets/images/slider/';
          $config['allowed_types']        = 'jpg';
          $config['overwrite']            = TRUE;

          $this->load->library('upload', $config);

          //Backup the variable
          $files = $_FILES;

          for($i = 0; $i < count($files['sliders']['name']); $i++)
          {
              if(!empty($files['sliders']['name'][$i]))
              {
                  //Tricks the system as if we're uploading one file
                  $_FILES['img']['name']= $files['sliders']['name'][$i];
                  $_FILES['img']['type']= $files['sliders']['type'][$i];
                  $_FILES['img']['tmp_name']= $files['sliders']['tmp_name'][$i];
                  $_FILES['img']['error']= $files['sliders']['error'][$i];
                  $_FILES['img']['size']= $files['sliders']['size'][$i];

                  $config['file_name']    = $i+1;
                  $this->upload->initialize($config);

                  if (!$this->upload->do_upload('img'))
                  {
                    $errors = $this->upload->display_errors();
                    $this->session->set_flashdata('file', $errors);
                    redirect(base_url('admin'));
                    exit;
                  }
              }
          }

          //Success
          $this->session->set_flashdata('success', 'Success Editing Sliders Images');
          $this->index();

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

    public function test ()
    {
        //Freatured Pic Upload
        if($_FILES)
        {
            //Config for upload class
            $config['upload_path']          = './assets/images';
            $config['allowed_types']        = 'jpg';
            $config['overwrite']            = TRUE;
            $config['file_name']            = 'freatured.jpg';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('freatured'))
            {
                print_r($this->upload->display_errors());
                exit;
            }
        }else
        {
            $this->load->view('admin/template/header', $this->data);
            $this->load->view('admin/new_project', $this->data);
            $this->load->view('admin/template/footer', $this->data);
        }
    }

    public function logout ()
    {
        session_destroy();
        redirect(base_url());
    }


}
