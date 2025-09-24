<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videocategory extends CI_Controller {

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
		'text' => 'Video Gallery Category Manager',
		'href' => base_url().adminpath.'/videocategory'
		);
		$data['heading']="Video Gallery Category Manager";
		$this->load->model(adminpath.'/model_videocategory');
		

		$data['allvideocategory']= array();	
    	$results = $this->model_videocategory->getvideos();
		if ($results) {  
			foreach($results as $val){
				$data['allvideocategory'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'href' => base_url().adminpath.'/videocategory/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/videocategory/delete';
		$data['activeaction'] = base_url().adminpath.'/videocategory/active';
		$data['inactiveaction'] = base_url().adminpath.'/videocategory/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/videocategory',$data);
		$this->load->view(adminpath.'/footer');

    }
    public function active(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videocategory');
			$this->model_videocategory->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/videocategory');
    }
    public function inactive(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videocategory');
			$this->model_videocategory->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/videocategory');
    }
    public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videocategory');
			$this->model_videocategory->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/videocategory');
    }
    public function add() {
        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videocategory');
			$postdata = array();
			$postdata['name'] = $this->input->post('name');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$this->model_videocategory->add($postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/videocategory');
		}
		$this->getform();
		
    }	
     public function edit() {
        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videocategory');
			$postdata = array();
			$postdata['name'] = $this->input->post('name');		
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$this->model_videocategory->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/videocategory');
		}
		$this->getform();
		
    }	
    public function getform() {
		
		$this->load->model(adminpath.'/model_videocategory');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Video Gallery Category Manager',
		'href' => base_url().adminpath.'/videocategory'
		);
				
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Video Gallery Category',
		'href' => '#'
		);
		$data['heading']="Add Video Gallery Category";
		$data['action'] = base_url().adminpath.'/videocategory/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Video Gallery Category',
		'href' => '#'
		);
		$data['heading']="Edit Video Gallery Category";
		$data['action'] = base_url().adminpath.'/videocategory/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_videocategory->getvideo($this->input->get('id'));
    	}

    	if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}

		
    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

		$data['cancel'] = base_url().adminpath.'/Model_videocategory';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/videocategoryform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}