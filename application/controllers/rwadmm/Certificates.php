<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificates extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

       	// $data="";
        $data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Certificate Manager',
		'href' => base_url().adminpath.'/certificates'
		);

		$data['heading']="Certificate Manager";
		$this->load->model(adminpath.'/model_certificate');

		$data['allimages']= array();
    	$results = $this->model_certificate->getimages();
		if ($results) {  
			foreach($results as $val){
				if($val->image) {	
					$thumbimage=resizeimage($val->image,100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				else {
					$thumbimage=resizeimage('no_image.png',100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				$data['allimages'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'image' => $image,
					'status' => $val->status,
					'href' => base_url().adminpath.'/certificates/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/certificates/delete';
		$data['activeaction'] = base_url().adminpath.'/certificates/active';
		$data['inactiveaction'] = base_url().adminpath.'/certificates/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/certificates',$data);
		$this->load->view(adminpath.'/footer');

    }
    
    public function active(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_certificate');
			$this->model_certificate->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/certificates');
    }
    
    public function inactive(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_certificate');
			$this->model_certificate->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/certificates');
    }
    
    public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_certificate');
			$this->model_certificate->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/certificates');
    }
    
    public function add() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_certificate');
			$postdata = array();
			if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."image/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="image/".$expdoc_file;
				$postdata['image'] =$imgname;
			}		
			$postdata['name'] = $this->input->post('name');
			$postdata['home'] = $this->input->post('home');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_certificate->add($postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/certificates');
		}
		$this->getform();
    }	
    
    
    public function edit() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_certificate');
			$postdata = array();
			if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."image/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="image/".$expdoc_file;
				$postdata['image'] =$imgname;
			 }
			$postdata['name'] = $this->input->post('name');
			$postdata['home'] = $this->input->post('home');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_certificate->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/certificates');
		}
		$this->getform();
    }
    
    
    public function getform() {
		
		$this->load->model(adminpath.'/model_certificate');
		//$this->load->model(adminpath.'/model_category');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Certificates Manager',
		'href' => base_url().adminpath.'/certificates'
		);
				
		if (!$this->input->get('id')) {
			$data['breadcrumbs'][] = array(
			'text' => 'Add Certificates',
			'href' => '#'
			);
			$data['heading']="Add Certificates";
			$data['action'] = base_url().adminpath.'/certificates/add';
		} else {
			$data['breadcrumbs'][] = array(
			'text' => 'Edit Certificates',
			'href' => '#'
			);
			$data['heading']="Edit Certificates";
			$data['action'] = base_url().adminpath.'/certificates/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_certificate->getimage($this->input->get('id'));
    	}
		
		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
		
		if ($this->input->post('home')) {
      		$data['home'] = $this->input->post('home');
    	} elseif (isset($info)) {
			$data['home'] = $info->home;
		} else {
      		$data['home'] = '';
    	}

    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

    	if (isset($info)) {
		    if($info->image) {	
				$thumbimage=resizeimage($info->image,100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
		    else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
    	else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['image'] = "<img src='".$thumbimage."'/>";
		}
		
		$data['cancel'] = base_url().adminpath.'/certificates';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/certificateform',$data);
		$this->load->view(adminpath.'/footer');

	}
}