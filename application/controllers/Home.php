<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct ()
	{
		parent::__construct();

		//About Page
		$this->data['about_text'] 						= $this->config_model->about('about');
		$this->data['about_motto'] 						= $this->config_model->about('motto');

		//Gallery
		$this->data['gallery_banner_residence'] 		= $this->config_model->gallery_banner('residence');
		$this->data['gallery_banner_comercial'] 		= $this->config_model->gallery_banner('comercial');

		//What we do
		$this->data['wedo'] 				 			= $this->config_model->whatwedo();
	}

	public function index ()
	{
		$this->load->view('template/header', $this->data);
		$this->load->view('frontpages/home', $this->data);
		$this->load->view('template/footer', $this->data);
	}

	public function email ()
	{
		if($this->input->post())
		{
			$name 		= $this->input->post('name');
			$contact 	= $this->input->post('contact');
			$message 	= $this->input->post('message');

			$this->load->library('email');

			$this->email->from('consumer_kickbackr@arcon.com', 'Machine Generated');
			$this->email->to('someone@example.com');

			$this->email->subject('Request by ' . $name);
			$this->email->message($message . 'My Contact : ' . $contact);

			$this->email->send();
		}else
		{
			redirect (base_url());
		}
	}
}