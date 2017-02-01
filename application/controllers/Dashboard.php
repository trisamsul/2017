<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	private $head;
	private $foot;
	public function __construct(){
		parent::__construct();
		$this->head['tRev'] = $this->ModelCommittee->selectAll()->num_rows();
		$this->head['tPar'] = $this->ModelParticipant->selectAll(1)->num_rows();
		$this->head['tPay'] = $this->ModelParticipant->selectAll()->num_rows();
		$this->head['tNews'] = $this->ModelNews->selectAll()->num_rows();
		$this->foot['v'] = $this->ModelParticipant->selectAll(1)->num_rows();
		$this->foot['uv'] = $this->ModelParticipant->selectAll()->num_rows() - $this->foot['v'];
	}
	public function index()
	{
		// parent::__construct();
		if(isset($_SESSION['logged_in'])){	
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/home');
			$this->load->view('dashboard/layout/footer',$this->foot);
		}else{
			redirect(site_url('admin/'));
		}
	}
	public function login(){
		$this->load->view('login');
	}
	public function loggingIn(){
		$data = $this->input->post();
		$dataz = $this->ModelUser->checkLogin($data['username'],md5($data['password']))->row_array();
		if(isset($dataz)){
			$userdata = array(
				'username'  => $dataz['username'],
				'fullname'  => $dataz['fullname'],
				'log'  => $dataz['log'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);

			redirect('Dashboard/');
		}else{
			redirect(site_url('admin/'));
		}
	}
	public function loggingOut(){
		$this->session->sess_destroy();
		redirect('');
		// $this->load->view('login');
	}		
	public function profile($rep=0){
		$data['rep'] = $rep;
		if(isset($_SESSION['logged_in'])){	
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/profile',$data);
			$this->load->view('dashboard/layout/footer');			
		}else{
			redirect('admin/');
		}		
	}
	public function editPass(){
		$form = $this->input->post();
		if(md5($form['old']) == $this->ModelUser->selectByUsername($_SESSION['username'])->row()->password){
			if($form['new']==$form['new2']){
				$upd['password'] = md5($form['new']);
				$this->ModelUser->update($this->ModelUser->selectByUsername($_SESSION['username'])->row()->id,$upd);
				redirect('Dashboard/profile/1');
			}else{
				redirect('Dashboard/profile/2');
			}
		}else{
			redirect('Dashboard/profile/2');		
		}
	}
	public function payment(){
		$data['data'] = $this->ModelParticipant->selectAll()->result_array();
		if(isset($_SESSION['logged_in'])){	

			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/pay',$data);
			$this->load->view('dashboard/layout/footer');			
		}else{
			redirect('admin/');
		}
	}
	public function ActPay($command,$id=0){
		if($command == "activate"){
			if($this->ModelParticipant->selectById($id)->row()->status == 0){
				$upd['status'] = 1;
				$this->ModelParticipant->update($id,$upd);
			}else{
				$upd['status'] = 0;
				$this->ModelParticipant->update($id,$upd);
			}
			redirect('Dashboard/payment');
		}else if($command == "delete"){
			$uri = "assets/uploads/".$this->ModelParticipant->selectById($id)->row()->payment;
			unlink($uri);			
			$this->ModelParticipant->delete($id);
			redirect('Dashboard/payment');
		}
	}
	public function participant(){
		$data['data'] = $this->ModelParticipant->selectAll(1)->result_array();
		// var_dump($data['data']);
		if(isset($_SESSION['logged_in'])){	
			
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/par',$data);
			$this->load->view('dashboard/layout/footer');			
		}else{
			redirect('admin/');
		}
	}
	public function reviewer(){
		$data['data'] = $this->ModelCommittee->selectAll()->result_array();
		// var_dump($data['data']);
		if(isset($_SESSION['logged_in'])){	
			
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/rev',$data);
			$this->load->view('dashboard/layout/footer');			
		}else{
			redirect('admin/');
		}
	}		
	public function ActRev($command,$id=0){
		if($command == "edit"){
			$data['edit'] = $this->ModelCommittee->selectById($id)->row_array();
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/revf',$data);
			$this->load->view('dashboard/layout/footer');	
		}else if($command == "add"){
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/revf');
			$this->load->view('dashboard/layout/footer');	
		}else if($command == "editAct"){
			$data = $this->input->post();
			$this->ModelCommittee->update($id,$data);
			redirect('Dashboard/reviewer');
		}else if($command == "del"){
			$this->ModelCommittee->delete($id);
			redirect('Dashboard/reviewer');
		}else if($command == "addAct"){
			$data = $this->input->post();
			$this->ModelCommittee->insert($data);
			redirect('Dashboard/reviewer');
			// var_dump($data);
		}
	}

	public function news(){
		$data['data'] = $this->ModelNews->selectAll()->result_array();

		if(isset($_SESSION['logged_in'])){	
			
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/news',$data);
			$this->load->view('dashboard/layout/footer');			
		}else{
			redirect('admin/');
		}
	}

	public function ActNews($command,$id=0){
		if($command == "edit"){
			$data['edit'] = $this->ModelNews->selectById($id)->row_array();
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/newsf',$data);
			$this->load->view('dashboard/layout/footer');	
		}else if($command == "add"){
			$this->load->view('dashboard/layout/header',$this->head);
			$this->load->view('dashboard/newsf');
			$this->load->view('dashboard/layout/footer');	
		}else if($command == "editAct"){
			$data = $this->input->post();
			$this->ModelNews->update($id,$data);
			redirect('Dashboard/news');
		}else if($command == "del"){
			$this->ModelNews->delete($id);
			redirect('Dashboard/news');
		}else if($command == "addAct"){
			$data = $this->input->post();
			$this->ModelNews->insert($data);
			redirect('Dashboard/news');
			// var_dump($data);
		}
	}
}
