<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        //$data="";
        $data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Events Manager',
		'href' => base_url().adminpath.'/events'
		);
		$data['heading']="Events Manager";
		$this->load->model(adminpath.'/model_events');
		$data['allnewss']= array();	

		$data['allnewss']= array();	
    	$results = $this->model_events->getnewss();
		if ($results) {  
			foreach($results as $val){
				if($val->image) {	
					$thumbimage=resizeimage($val->image,100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				else {
					$thumbimage=resizeimage('no_image.jpg',100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				$data['allnewss'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'image' => $image,
					'status' => $val->status,
					'href' => base_url().adminpath.'/events/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/events/delete';
		$data['copyaction'] = base_url().adminpath.'/events/copy';
		$data['activeaction'] = base_url().adminpath.'/events/active';
		$data['inactiveaction'] = base_url().adminpath.'/events/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/events',$data);
		$this->load->view(adminpath.'/footer');

    }
    public function active(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
			$this->model_events->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/events');
    }

    public function copy(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
			$this->model_events->copy($_POST['table_records']);
    	}
    	redirect(adminpath.'/events');
    }
    public function inactive(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
			$this->model_events->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/events');
    }
    public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
			$this->model_events->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/events');
    }
    public function add() {
        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
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
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."news/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="news/".$expdoc_file;
				$postdata['image'] =$imgname;
			 }
			$category = $this->input->post('category');
			$postdata['name'] = $this->input->post('name');
			$postdata['home'] = $this->input->post('home');
			$postdata['free'] = $this->input->post('free');
			$postdata['subhead'] = $this->input->post('subhead');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['startdate'] = $this->input->post('startdate');
			$postdata['enddate'] = $this->input->post('enddate');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			$postdata['shortdescription'] = $this->input->post('shortdescription');
			$postdata['description'] = $this->input->post('description');
			$postdata['orderno'] = $this->input->post('orderno');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_events->add($postdata,$category);
			$this->session->set_flashdata('newsnotify', 'Username and Password not Valid.');
			redirect(adminpath.'/events');
		}
		$this->getform();
		
    }	
     public function edit() {
        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_events');
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
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."news/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="news/".$expdoc_file;
				$postdata['image'] =$imgname;
			 }
			$category = $this->input->post('category');
			$postdata['home'] = $this->input->post('home');
			$postdata['free'] = $this->input->post('free');
			$postdata['name'] = $this->input->post('name');
			$postdata['subhead'] = $this->input->post('subhead');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['startdate'] = $this->input->post('startdate');
			$postdata['enddate'] = $this->input->post('enddate');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			$postdata['shortdescription'] = $this->input->post('shortdescription');
			$postdata['description'] = $this->input->post('description');
			$postdata['orderno'] = $this->input->post('orderno');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_events->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('newsnotify', 'Username and Password not Valid.');
			redirect(adminpath.'/events');
		}
		$this->getform();
		
    }	
    public function getform() {
		
		$this->load->model(adminpath.'/model_events');
		$this->load->model(adminpath.'/model_category');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Events Manager',
		'href' => base_url().adminpath.'/events'
		);
				
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Events',
		'href' => '#'
		);
		$data['heading']="Add Events";
		$data['action'] = base_url().adminpath.'/events/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Events',
		'href' => '#'
		);
		$data['heading']="Edit Events";
		$data['action'] = base_url().adminpath.'/events/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_events->getnews($this->input->get('id'));
    	}
		
        if ($this->input->post('free')) {
      		$data['free'] = $this->input->post('free');
    	} elseif (isset($info)) {
			$data['free'] = $info->free;
		} else {
      		$data['free'] = '';
    	}

		
        if ($this->input->post('home')) {
      		$data['home'] = $this->input->post('home');
    	} elseif (isset($info)) {
			$data['home'] = $info->home;
		} else {
      		$data['home'] = '';
    	}

		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
			if ($this->input->post('subhead')) {
      		$data['subhead'] = $this->input->post('subhead');
    	} elseif (isset($info)) {
			$data['subhead'] = $info->subhead;
		} else {
      		$data['subhead'] = '';
    	}
			if ($this->input->post('orderno')) {
      		$data['orderno'] = $this->input->post('orderno');
    	} elseif (isset($info)) {
			$data['orderno'] = $info->orderno;
		} else {
      		$data['orderno'] = '';
    	}

    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

    	if ($this->input->post('linkname')) {
      		$data['linkname'] = $this->input->post('linkname');
    	} elseif (isset($info)) {
			$data['linkname'] = $info->linkname;
		} else {
      		$data['linkname'] = '';
    	}

    	if ($this->input->post('page_title')) {
      		$data['page_title'] = $this->input->post('page_title');
    	} elseif (isset($info)) {
			$data['page_title'] = $info->page_title;
		} else {
      		$data['page_title'] = '';
    	}


    	if ($this->input->post('meta_keyword')) {
      		$data['meta_keyword'] = $this->input->post('meta_keyword');
    	} elseif (isset($info)) {
			$data['meta_keyword'] = $info->meta_keyword;
		} else {
      		$data['meta_keyword'] = '';
    	}


    	if ($this->input->post('meta_description')) {
      		$data['meta_description'] = $this->input->post('meta_description');
    	} elseif (isset($info)) {
			$data['meta_description'] = $info->meta_description;
		} else {
      		$data['meta_description'] = '';
    	}


    	if ($this->input->post('startdate')) {
      		$data['startdate'] = $this->input->post('startdate');
    	} elseif (isset($info)) {
			$data['startdate'] = $info->startdate;
		} else {
      		$data['startdate'] = '';
    	}


    	if ($this->input->post('enddate')) {
      		$data['enddate'] = $this->input->post('enddate');
    	} elseif (isset($info)) {
			$data['enddate'] = $info->enddate;
		} else {
      		$data['enddate'] = '';
    	}

    	if ($this->input->post('shortdescription')) {
      		$data['shortdescription'] = $this->input->post('shortdescription');
    	} elseif (isset($info)) {
			$data['shortdescription'] = $info->shortdescription;
		} else {
      		$data['shortdescription'] = '';
    	}


    	if ($this->input->post('description')) {
      		$data['description'] = $this->input->post('description');
    	} elseif (isset($info)) {
			$data['description'] = $info->description;
		} else {
      		$data['description'] = '';
    	}
    	if (isset($info)) {
    		if($info->image) {	
					$thumbimage=resizeimage($info->image,100,80);
					$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
				}
			else {
					$thumbimage=resizeimage('no_image.jpg',100,80);
					$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
				}
    	}
    	else {
					$thumbimage=resizeimage('no_image.jpg',100,80);
					$data['image'] = "<img src='".$thumbimage."'/>";
				}
		$data['cancel'] = base_url().adminpath.'/events';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/eventsform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}