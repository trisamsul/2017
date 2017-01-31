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
		$config['file_name']				  = implode("",explode(" ",$this->input->post('name')));
		// $asd['payment'] = $config['file_name'];

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('payment')){
			redirect(site_url('Registration/success/0'));
		}else{
			$asd['payment'] = $config['file_name'].$this->upload->data('file_ext');
			$this->ModelParticipant->insertParticipant($asd);
			/*
				** SEND MAIL **
			*/
			
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'faisal.faisal.anwar@student.upi.edu',
				'smtp_pass' => 'sddaassddasad',
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1'
			);
			
			$this->load->library('email', $config);
			
			$this->email->set_newline("\r\n");
			/* sender  */
			$from_mail="infoy@icsitech.org";
			$from_name="ICSITech 2017";
			
			/* dest */
			$to_mail=$asd['email'];
			
			/*mail subject*/
			$subject="Successfully Registration";
			
			/* mail body (html format)*/
			$message="<table style='width:100%; font-family:arial; text-align: center; color:#6d6d6d; border: none; background-color: #d0d4dc;'>
				<tr style='height:30px;'></tr>
				<tr style='color:#fff; ; height: 100px; text-align: center;'>
					<td></td>
					<td style='width: 700px;background-color: #007eff;border-bottom: 5px solid #f8e042;'><img src='https://s30.postimg.org/baf82t0hd/icsitech_foot.png' style='width:200px;'></td>
					<td></td>
				</tr>
				<tr style=''>
					<td></td>
					<td style='width: 700px;background-color: #fff; border-top: none;'>
						<br>
						<h3 style='color: #007eff'>International Conference on Science in Information Technology 2017<br>(ICSITech2017)</h3>
						<hr style='width: 500px; border-top: 1px solid #d0d4dc;'>
						<p>
							<br>
							Thank you for participating in ICSITech 2017
							<br>
							<br>
							Your submission will be <b>processed</b><br>
							<br>
							<hr style='width: 500px; border-top: 1px solid #d0d4dc;'>
							<br>
							More info at:
							<a href='http://icsitech.org' target='_blank'style='color:#007eff;'>icsitech.org</a><br>
							<br>
						</p>
					</td>
					<td></td>
				</tr>
				<tr style='height:30px;'></tr>
			</table>";
			
			$this->email->set_newline("\r\n");
			$this->email->from($from_mail, $from_name);
			$this->email->to($to_mail);
			$this->email->subject($subject);	
			$this->email->message($message);  	
			$result=$this->email->send();
			if($result){
				echo "success";
			}else{
				echo $this->email->print_debugger();
			redirect(site_url('Registration/success/0'));
			}			
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
