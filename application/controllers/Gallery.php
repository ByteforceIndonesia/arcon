<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

    function __construct ()
    {
        parent::__construct();
    }

    public function index ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->freatured();

        $this->load->view('template/headerb', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footerb', $this->data);
    }

    public function residence ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('residential');

        $this->load->view('template/headerb', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footerb', $this->data);
    }

    public function comercial ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('commercial');

        $this->load->view('template/headerb', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footerb', $this->data);
    }

    public function others ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('others');

        $this->load->view('template/headerb', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footerb', $this->data);
    }

    public function project($uuid)
    {
        if($uuid == '')
        {
            redirect(base_url());
        }else
        {
            $this->data['project'] = $this->project_model->get($uuid);

            $this->load->view('template/headerb', $this->data);
            $this->load->view('frontpages/project', $this->data);
            $this->load->view('template/footerb', $this->data);
        }
    }
}
?>
