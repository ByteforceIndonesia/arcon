<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{

	public function uploadSingular ($path, $types, $field, $file_name)
	{
		$config['upload_path']          = $path;
        $config['allowed_types']        = $types;
        $config['max_size']             = 5000;
        $config['overwrite']            = TRUE;

        if(!empty($_FILES[$field]['name']))
        {
            $config['file_name']     = $file_name;

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload($field))
            {
                $errors = $this->upload->display_errors();
                $this->session->set_flashdata('file', $errors);
                redirect(base_url('admin'));
                exit;
            }
        }
	}

	public function uploadMultiple ($path, $types, $field)
	{
		//Config for upload class
        $config['upload_path']          = $path;
        $config['allowed_types']        = $types;
        $config['overwrite']            = TRUE;
        $this->upload->initialize($config);

        //Data File Uploads
        if($_FILES[$field])
        {
            //Store the array
            $files = $_FILES;

            for($i = 0; $i < count($files[$field]['name']); $i++)
            {
                if(!empty($files[$field]['name'][$i]))
                {
                    //Tricks the system as if we're uploading one file
                    $_FILES['img']['name']= $files[$field]['name'][$i];
                    $_FILES['img']['type']= $files[$field]['type'][$i];
                    $_FILES['img']['tmp_name']= $files[$field]['tmp_name'][$i];
                    $_FILES['img']['error']= $files[$field]['error'][$i];
                    $_FILES['img']['size']= $files[$field]['size'][$i];

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

	public function makeDirectoryProject ($catagory, $uuid)
	{
		if(!mkdir('./assets/images/projects/' . $catagory . '/' . $uuid))
        {
            $this->session->set_flashdata('error', 'Create folder error');
            $_POST = '';
            return false;
        }else
        {
            if(!mkdir('./assets/images/projects/' . $catagory . '/' . $uuid . '/freatured'))
            {
                $this->session->set_flashdata('error', 'Create folder error');
                $_POST = '';
            	return false;
            }

            if(!mkdir('./assets/images/projects/' . $catagory . '/' . $uuid . '/result'))
            {
                $this->session->set_flashdata('error', 'Create folder error');
                $_POST = '';
            	return false;
            }

            if(!mkdir('./assets/images/projects/' . $catagory . '/' . $uuid . '/design'))
            {
                $this->session->set_flashdata('error', 'Create folder error');
                $_POST = '';
            	return false;
            }
        }
	}
}