<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	private $data;

	function __construct ()
	{
		parent::__construct();

		//Page Title
		$this->data['title'] 			= 'Arcon Interior Design';

		//Standard Config
		$this->data['home_slider'] 		= base_url() . $this->config_model->home_slider()->value_one;
		$this->data['company_logo'] 	= base_url() . $this->config_model->company_logo()->value_one;

		//Parallaxes
		$this->data['parallax_one'] 	= base_url() . $this->config_model->parallax('one')->value_one;
		$this->data['parallax_two'] 	= base_url() . $this->config_model->parallax('two')->value_one;
		$this->data['parallax_three'] 	= base_url() . $this->config_model->parallax('two')->value_one;
		$this->data['parallax_four'] 	= base_url() . $this->config_model->parallax('two')->value_one;

		//About Page
		$this->data['about_text'] 			= $this->config_model->about('about');
		$this->data['about_motto'] 			= $this->config_model->about('motto');

		//Gallery
		$this->data['gallery_banner'] 		= $this->config_model->gallery_banner();

		//Team Members
		$this->data['team'] 			= $this->config_model->team_members();
	}

	public function index ()
	{
		$this->load->view('template/header', $this->data);
		$this->load->view('frontpages/home', $this->data);
		$this->load->view('template/footer', $this->data);
	}
}