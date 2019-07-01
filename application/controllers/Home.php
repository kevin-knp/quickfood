<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$view = '';
		$data['content'] = $this->load->view('home', $view, TRUE);
		$this->load->view('index', $data);		
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */