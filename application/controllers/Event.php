<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		$this->load->model('model_event');
		//$data="";

		$data['page_title']="Events";
		$data['meta_keyword']="Events";
		$data['meta_description']="Events";
		$data['heading']="Events";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'events',
		'href' => base_url().'eventdetails'
		);

		$data['allnews']= array();	
    	$results = $this->model_event->getallnews();
		if ($results) {  
			foreach($results as $val){
				if($val->image) {	
					$thumbimage=resizeimage($val->image,500,375);
					$image = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.jpg',500,375);
					$image = $thumbimage;
				}

				$data['allnews'][] = array(
					'id' => $val->id,
					'free' => $val->free,
					'name' => $val->name,
					'date_added' => $val->date_added,
					'shortdescription' => $val->shortdescription,
					'startdate' => $val->startdate,
					'enddate' => $val->enddate,
					'image' => $image,
					'href' => base_url().'eventdetails/' . $val->linkname
				);
			}
		}

		$this->load->view('header',$data);
		$this->load->view('event',$data);
		$this->load->view('footer');
	}
	public function details(){
		$this->load->model('model_event');
		//$data="";

		//$data['page_title']="News & Events";
//		$data['meta_keyword']="News & Events";
//		$data['meta_description']="News & Events";
//		$data['heading']="News & Events";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Events',
		'href' => base_url().'blogdtails'
		);


		$parts = explode('/', $this->uri->uri_string());
		$keyword = end($parts);
		if($keyword){
			$info = $this->model_event->getnews($keyword);

			$data['breadcrumbs'][] = array(
			'text' => $info->name,
			'href' => base_url().'blogdtails/'.$info->linkname
			);

			if (isset($info)) {
				$data['name'] = $info->name;
			} else {
	      		$data['name'] = '';
	    	}

	    	if (isset($info)) {
				$data['linkname'] = $info->linkname;
			} else {
	      		$data['linkname'] = '';
	    	}

	    	if (isset($info)) {
				$data['page_title'] = $info->page_title;
			} else {
	      		$data['page_title'] = '';
	    	}

	    	if (isset($info)) {
				$data['startdate'] = $info->startdate;
			} else {
	      		$data['startdate'] = '';
	    	}

	    	if (isset($info)) {
				$data['enddate'] = $info->enddate;
			} else {
	      		$data['enddate'] = '';
	    	}
	    	$data['todaydate'] = Date('Y-m-d');

	    	if (isset($info)) {
				$data['meta_keyword'] = $info->meta_keyword;
			} else {
	      		$data['meta_keyword'] = '';
	    	}


	    	if (isset($info)) {
				$data['meta_description'] = $info->meta_description;
			} else {
	      		$data['meta_description'] = '';
	    	}


	    	if (isset($info)) {
				$data['shortdescription'] = $info->shortdescription;
			} else {
	      		$data['shortdescription'] = '';
	    	}


	    	if (isset($info)) {
				$data['description'] = $info->description;
			} else {
	      		$data['description'] = '';
	    	}


	    	if (isset($info)) {
				$data['free'] = $info->free;
			} else {
	      		$data['free'] = '';
	    	}



            if (isset($info)) {
				$data['images'] = $info->image;
			} else {
	      		$data['images'] = '';
	    	}


            if (isset($info)) {
				$data['date_added'] = $info->date_added;
			} else {
	      		$data['date_added'] = '';
	    	}


	    	if (isset($info)) {
	    		if($info->image) {	
						$thumbimage=resizeimage($info->image,600,300);
						$data['image'] = $thumbimage;
					}
				else {
						$thumbimage=resizeimage('no_image.jpg',600,300);
						$data['image'] = $thumbimage;
					}
	    	}
	    	else {
					$thumbimage=resizeimage('no_image.jpg',600,300);
					$data['image'] = $thumbimage;
			}
			
			
			
			
			$data['allnews']= array();	
	    	$results = $this->model_event->getallnews();
			if ($results) {  
				foreach($results as $val){
					if($val->image) {	
						$thumbimage=resizeimage($val->image,500,375);
						$image = $thumbimage;
					}
					else {
						$thumbimage=resizeimage('no_image.jpg',500,375);
						$image = $thumbimage;
					}

					$data['allnews'][] = array(
						'id' => $val->id,
						'free' => $val->free,
						'name' => $val->name,
						'date_added' => $val->date_added,
						'shortdescription' => $val->shortdescription,
						'startdate' => $val->startdate,
						'enddate' => $val->enddate,
						'image' => $image,
						'href' => base_url().'eventdetails/' . $val->linkname
					);
				}
			}
			
			
		$data['action'] = base_url('eventdetails/save');
			

			$this->load->view('header',$data);
			$this->load->view('eventdetails',$data);
			$this->load->view('footer');
		}
		else {
    		redirect('home');
		}


	}



	public function save(){

		$this->load->model('model_setting');
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {

		//reCAPTCHA validation
		if (isset($_POST['g-recaptcha-response'])) {
			require(ROOTDIR.'component/recaptcha/src/autoload.php');	
			$recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);
			$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
			  if (!$resp->isSuccess()) {
					$this->session->set_flashdata('eventnotify', 'Captcha Validation Required!');
					header('location:'.$_SERVER['HTTP_REFERER']);
			  }	
			  else{

			  	
					$postdata = array();
					$subject="Event Form";
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
							<td>".$this->input->post('phone')."</td>
						</tr>
						<tr>
							<td>Education</td>
							<td>".$this->input->post('education')."</td>
						</tr>
						<tr>
							<td>Designation</td>
							<td>".$this->input->post('designation')."</td>
						</tr>
						<tr>
							<td>Address</td>
							<td>".$this->input->post('address')."</td>
						</tr>
						<tr>
							<td>Pincode</td>
							<td>".$this->input->post('pincode')."</td>
						</tr>
						<tr>
							<td>Event Name</td>
							<td>".$this->input->post('eventname')."</td>
						</tr>
						</table>
					";
					$postdata = array();
					$postdata['name'] = $this->input->post('name');
					$postdata['email'] = $this->input->post('email');
					$postdata['phone'] = $this->input->post('phone');
					$postdata['education'] = $this->input->post('education');
					$postdata['designation'] = $this->input->post('designation');
					$postdata['address'] = $this->input->post('address');
					$postdata['pincode'] = $this->input->post('pincode');
					$postdata['eventname'] = $this->input->post('eventname');
					$postdata['date_added'] = date('Y-m-d H:i:s');
					$postdata['date_modify'] = date('Y-m-d H:i:s');
					$data['evventformid'] = $this->model_setting->addeventdetail($postdata);
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
					$mail->SetFrom("noreplyarvindotta@gmail.com", "Event Us");
					$mail->AddAddress("arvindotta@gmail.com");
					$mail->Subject = $subject;
					$mail->WordWrap   = 80;
					$mail->MsgHTML($body);
					$mail->IsHTML(true);
					$mail->Send();
					$this->session->set_flashdata('eventnotify', 'Form submit successfully');


					$data['breadcrumbs'][] = array(
					'text' => 'Home',
					'href' => base_url()
					);
							
					$data['breadcrumbs'][] = array(
					'text' => 'Thank You',
					'href' => '#'
					);

					$data['heading'] = 'Thank You';
					$data['name'] = 'Thank You';
			      	$data['page_title'] = 'Thank You';
			      	$data['meta_keyword'] = 'Thank You';
			      	$data['meta_description'] = 'Thank You';

					$data['name'] = $this->input->post('name');
					$data['email'] = $this->input->post('email');
					$data['phone'] = $this->input->post('phone');
					$data['education'] = $this->input->post('education');
					$data['designation'] = $this->input->post('designation');
					$data['address'] = $this->input->post('address');
					$data['pincode'] = $this->input->post('pincode');
					$data['eventname'] = $this->input->post('eventname');
					$data['free'] = $this->input->post('free');

					$this->load->view('header',$data);
					$this->load->view('eventthankyou',$data);
					$this->load->view('footer');

			  }
			}
		else{
				$this->session->set_flashdata('eventnotify', 'Captcha Validation Required!');
					header('location:'.$_SERVER['HTTP_REFERER']);
		 }	
			
		}
		else{
				$this->session->set_flashdata('eventnotify', 'Captcha Validation Required!');
					header('location:'.$_SERVER['HTTP_REFERER']);
		 }	
	}
}
