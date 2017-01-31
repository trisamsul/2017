<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller{

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
	 
	 /* 
		Index function
		Display the account page
	 */
	public function index(){
		$this->send();		
	}
	
	public function send(){
		/*
			** SEND MAIL EXAMPLE **
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
		$from_mail="no-reply@icsitech.org";
		$from_name="ICSITech Administrator";
		
		/* dest */
		$to_mail="faisalsyfl@gmail.com";
		
		/*mail subject*/
		$subject="Email Test";
		
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
						Thank you for participating in ICSTITech 2017
						<br>
						<br>
						Your submission will be processed<br>
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
		}
	}
}
