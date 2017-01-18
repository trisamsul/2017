<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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
		$this->load->view('regist');
		$this->load->view('layout/footer');
	}

	public function onSubmit(){
		$asd = $this->input->post(NULL, FALSE);
		if($asd['studentid'] == ""){
			$asd['studentid'] = null;
		}else if($asd['ieeeid'] == ""){
			$asd['ieeeid'] = null;
		}
		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'jpg|png|pdf|docx';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['file_name']				  = $asd['name'];
		$asd['payment'] = $config['file_name'];

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('payment')){
			redirect(site_url('Registration/success/0'));
		}else{
			$this->Participant->insertParticipant($asd);
			redirect(site_url('Registration/success/1'));
		}
	}
	public function success($id)
	{
		$data['m'] = $id;
		$this->load->view('layout/header');
		$this->load->view('regist',$data);
		$this->load->view('layout/footer');
	}
}
