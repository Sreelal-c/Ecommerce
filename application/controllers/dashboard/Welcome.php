<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/footer');
	}

}
