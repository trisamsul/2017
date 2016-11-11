<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conference extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('committee');
		$this->load->view('layout/footer');
	}

	public function latest(){
		$this->load->view('layout/header');
		$this->load->view('latest');
		$this->load->view('layout/footer');
	}

	public function publication(){
		$this->load->view('layout/header');
		$this->load->view('pubs');
		$this->load->view('layout/footer');
	}

	public function previous(){
		$this->load->view('layout/header');
		$this->load->view('previous');
		$this->load->view('layout/footer');		
	}
	
	public function future(){
		$this->load->view('layout/header');
		$this->load->view('future');
		$this->load->view('layout/footer');		
	}
}
