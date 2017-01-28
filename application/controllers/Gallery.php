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

        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function residence ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('residence');

        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function comercial ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('comercial');

        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function others ()
    {
        //Load all
        $this->data['gallery'] = $this->gallery_model->all('others');

        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }
    
}    
?>