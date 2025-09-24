<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_Post_Controller extends CI_Controller {
	public function index()
	{	
		$this->load->view("ajax_post_view");
	}


	public function subscribenewsletter()
	{
	    
		$json = array();
		$email=$_POST['email'];	
		$condition = "email =" . "'" . $email . "'";
		$this->db->select('*');
		$this->db->from('newsletter');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			$json['sucess']='This email is already subscribed to our periodic newsletter.';
		}
		else {
			$this->db->query("insert into newsletter SET email='".$email."',date_added=NOW()");
			$json['sucess']='You have successfully subscribed to our periodic newsletter.';
		}
		echo json_encode($json);
	}


	public function eventformpaymentsave()
	{
		$json = array();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model('model_setting');
			$postdata = array();
			$postdata['transactionid'] = $this->input->post('transactionid');
			$this->model_setting->savetransactionid($this->input->post('evventformid'),$postdata);
			$json['sucess']='Save Successfully';

		}
		else{
			$json['error']='Captcha Validation Required!';			
		}	
		echo json_encode($json);

	}

	public function savefirstform()
	{
		$json = array();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		if (isset($_POST['g-recaptcha-response'])) {
			require(ROOTDIR.'component/recaptcha/src/autoload.php');	
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			if (!$resp->isSuccess()) {
				 $json['error']='Captcha Validation Required!';			
			}
			else {
					$postdata = array();
					$subject="Request for an Interview Form";
					$body="<table width='500px' border='1' cellpadding='10' cellspacing='0' id='tabledata' name='tabledata'>
						<tr>
							<td width='35%'>Name</td>
							<td width='65%'>".$this->input->post('name')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('email')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('phoneno')."</td>
						</tr>
						<tr>
							<td>Invitation</td>
							<td>".$this->input->post('invitation')."</td>
						</tr>
						<tr>
							<td>Organization</td>
							<td>".$this->input->post('organization')."</td>
						</tr>
						<tr>
							<td>Designation</td>
							<td>".$this->input->post('designation')."</td>
						</tr>
						<tr>
							<td>Purpose of Interview</td>
							<td>".$this->input->post('purposeinterview')."</td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td>".$this->input->post('pincode')."</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>".$this->input->post('message')."</td>
						</tr>
					</table>
					";
					require(ROOTDIR.'class.phpmailer.php');
					$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = TRUE;
					$mail->SMTPSecure = "tls";
					$mail->Port     = 587;  
					$mail->Username = "noreplyarvindotta@gmail.com";
					$mail->Password = "htyiyscdhbginccl";
					$mail->Host     = "smtp.gmail.com";
					$mail->Mailer   = "smtp";
					$mail->SetFrom("noreplyarvindotta@gmail.com", "Request for an Interview Form");
					$mail->AddAddress("arvindotta@gmail.com");
					$mail->AddAddress("info.upseducation@gmail.com");
					if(is_array($_FILES)) {
						$mail->AddAttachment($_FILES['questionnaire']['tmp_name'],$_FILES['questionnaire']['name']); 
					}
					$mail->Subject = $subject;
					$mail->WordWrap   = 80;
					$mail->MsgHTML($body);
					$mail->IsHTML(true);
					$mail->Send();
					$json['sucess']='Form submit successfully';
				}
			}
			else
			{
				$json['error']='Captcha Validation Required!';
			}
		}
		else
		{
			$json['error']='Captcha Validation Required!';			
		}	
		echo json_encode($json);
	}


	public function savesecondform()
	{
		$json = array();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if (isset($_POST['g-recaptcha-response'])) {
				require(ROOTDIR.'component/recaptcha/src/autoload.php');	
				$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
				$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
				if (!$resp->isSuccess()) {
					$json['error']='Captcha Validation Required!';			
				}
				else
				{
					$postdata = array();
					$subject="Invitation as speaker Form";
					$body="<table width='500px' border='1' cellpadding='10' cellspacing='0' id='tabledata' name='tabledata'>
						<tr>
							<td width='35%'>Name</td>
							<td width='65%'>".$this->input->post('name')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('email')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('phoneno')."</td>
						</tr>
						<tr>
							<td>Invitation</td>
							<td>".$this->input->post('invitation')."</td>
						</tr>
						<tr>
							<td>Organization</td>
							<td>".$this->input->post('organization')."</td>
						</tr>
						<tr>
							<td>Designation</td>
							<td>".$this->input->post('designation')."</td>
						</tr>
						<tr>
							<td>Topic</td>
							<td>".$this->input->post('topic')."</td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td>".$this->input->post('pincode')."</td>
						</tr>
						<tr>
							<td>Mode</td>
							<td>".$this->input->post('mode')."</td>
						</tr>
						<tr>
							<td>Nature of Participants</td>
							<td>".$this->input->post('participants')."</td>
						</tr>
						<tr>
							<td>Remuneration / Recognitions</td>
							<td>".$this->input->post('remunerationrecognitions')."</td>
						</tr>
						<tr>
							<td>Remuneration Data</td>
							<td>".$this->input->post('remunerationrecognitionsdata')."</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>".$this->input->post('message')."</td>
						</tr>
					</table>
					";
					require(ROOTDIR.'class.phpmailer.php');
					$mail = new PHPMailer();
					$adminemail="info@digitalupward.com";
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = TRUE;
					$mail->SMTPSecure = "tls";
					$mail->Port     = 587;  
					$mail->Username = "noreplyarvindotta@gmail.com";
					$mail->Password = "htyiyscdhbginccl";
					$mail->Host     = "smtp.gmail.com";
					$mail->Mailer   = "smtp";
					$mail->SetFrom("noreplyarvindotta@gmail.com", "Invitation as speaker Form");
					$mail->AddAddress("arvindotta@gmail.com");
					$mail->AddAddress("info.upseducation@gmail.com");
					$mail->Subject = $subject;
					$mail->WordWrap   = 80;
					$mail->MsgHTML($body);
					$mail->IsHTML(true);
					$mail->Send();
					$json['sucess']='Form submit successfully';
				}
			}
			else 
			{
				$json['error']='Captcha Validation Required!';
			}
		}
		else {
			$json['error']='Captcha Validation Required!';			
		}	
		echo json_encode($json);
	}



	public function savethirdform()
	{
		$json = array();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		if (isset($_POST['g-recaptcha-response'])) {
			require(ROOTDIR.'component/recaptcha/src/autoload.php');	
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			  if (!$resp->isSuccess()) {
				 $json['error']='Captcha Validation Required!';			
			  }	
			  else{

					$postdata = array();

					$subject="Invitation For Workshop Form";
					$body="<table width='500px' border='1' cellpadding='10' cellspacing='0' id='tabledata' name='tabledata'>
						<tr>
							<td width='35%'>Name</td>
							<td width='65%'>".$this->input->post('name')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('email')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('phoneno')."</td>
						</tr>
						<tr>
							<td>Invitation</td>
							<td>".$this->input->post('invitation')."</td>
						</tr>
						<tr>
							<td>Organization</td>
							<td>".$this->input->post('organization')."</td>
						</tr>
						<tr>
							<td>Designation</td>
							<td>".$this->input->post('designation')."</td>
						</tr>
						<tr>
							<td>Topic</td>
							<td>".$this->input->post('topic')."</td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td>".$this->input->post('pincode')."</td>
						</tr>
						<tr>
							<td>Mode</td>
							<td>".$this->input->post('mode')."</td>
						</tr>
						<tr>
							<td>Nature of Participants</td>
							<td>".$this->input->post('participants')."</td>
						</tr>
						<tr>
							<td>Remuneration / Recognitions</td>
							<td>".$this->input->post('remunerationrecognitions')."</td>
						</tr>
						<tr>
							<td>Remuneration Data</td>
							<td>".$this->input->post('remunerationrecognitionsdata')."</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>".$this->input->post('message')."</td>
						</tr>
						</table>
					";
					require(ROOTDIR.'class.phpmailer.php');
					$mail = new PHPMailer();
					$adminemail="info@digitalupward.com";
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = TRUE;
					$mail->SMTPSecure = "tls";
					$mail->Port     = 587;  
					$mail->Username = "noreplyarvindotta@gmail.com";
					$mail->Password = "htyiyscdhbginccl";
					$mail->Host     = "smtp.gmail.com";
					$mail->Mailer   = "smtp";
					$mail->SetFrom("noreplyarvindotta@gmail.com", "Invitation For Workshop Form");
					$mail->AddAddress("arvindotta@gmail.com");
					$mail->AddAddress("info.upseducation@gmail.com");
					$mail->Subject = $subject;
					$mail->WordWrap   = 80;
					$mail->MsgHTML($body);
					$mail->IsHTML(true);
					$mail->Send();
					$json['sucess']='Form submit successfully';
			  }
			}
		else{
				$json['error']='Captcha Validation Required!';
		 }	
			
		}
		else{
				$json['error']='Captcha Validation Required!';			
		 }	
		echo json_encode($json);



	}



	public function savefourform()
	{
		$json = array();
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
		if (isset($_POST['g-recaptcha-response'])) {
			require(ROOTDIR.'component/recaptcha/src/autoload.php');	
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			  if (!$resp->isSuccess()) {
				 $json['error']='Captcha Validation Required!';			
			  }	
			  else{

					$postdata = array();

					$subject="Others Form";
					$body="<table width='500px' border='1' cellpadding='10' cellspacing='0' id='tabledata' name='tabledata'>
						<tr>
							<td width='35%'>Name</td>
							<td width='65%'>".$this->input->post('name')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('email')."</td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td>".$this->input->post('phoneno')."</td>
						</tr>
						<tr>
							<td>Invitation</td>
							<td>".$this->input->post('invitation')."</td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td>".$this->input->post('pincode')."</td>
						</tr>
						<tr>
							<td>Designation</td>
							<td>".$this->input->post('designation')."</td>
						</tr>
						<tr>
							<td>Message</td>
							<td>".$this->input->post('message')."</td>
						</tr>
					</table>
					";
					require(ROOTDIR.'class.phpmailer.php');
					$mail = new PHPMailer();
					$adminemail="info@digitalupward.com";
					$mail->IsSMTP();
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = TRUE;
					$mail->SMTPSecure = "tls";
					$mail->Port     = 587;  
					$mail->Username = "noreplyarvindotta@gmail.com";
					$mail->Password = "htyiyscdhbginccl";
					$mail->Host     = "smtp.gmail.com";
					$mail->Mailer   = "smtp";
					$mail->SetFrom("noreplyarvindotta@gmail.com", "Others Form");
					$mail->AddAddress("arvindotta@gmail.com");
					$mail->AddAddress("info.upseducation@gmail.com");
					$mail->Subject = $subject;
					$mail->WordWrap   = 80;
					$mail->MsgHTML($body);
					$mail->IsHTML(true);
					$mail->Send();
					$json['sucess']='Form submit successfully';
			  }
			}
		else{
				$json['error']='Captcha Validation Required!';
		 }	
			
		}
		else{
				$json['error']='Captcha Validation Required!';			
		 }	
		echo json_encode($json);



	}

	



}



