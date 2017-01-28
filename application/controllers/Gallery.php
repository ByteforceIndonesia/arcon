<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

    function __construct ()
    {
        parent::__construct();

    }

    public function index ()
    {
        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function residence ()
    {
        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function comercial ()
    {
        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }

    public function others ()
    {
        $this->load->view('template/header', $this->data);
        $this->load->view('frontpages/gallery', $this->data);
        $this->load->view('template/footer', $this->data);
    }
    
}    
?>