<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

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
		'text' => 'Career Manager',
		'href' => base_url().adminpath.'/career'
		);

		$data['heading']="Career Manager";
		$this->load->model(adminpath.'/model_career');

		$data['allimages']= array();
    	$results = $this->model_career->getimages();
		if ($results) {  
			foreach($results as $val){
				$data['allimages'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'status' => $val->status,
					'href' => base_url().adminpath.'/career/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/career/delete';
		$data['activeaction'] = base_url().adminpath.'/career/active';
		$data['inactiveaction'] = base_url().adminpath.'/career/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/career',$data);
		$this->load->view(adminpath.'/footer');

    }
    
    public function active(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_career');
			$this->model_career->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/career');
    }
    
    public function inactive(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_career');
			$this->model_career->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/career');
    }
    
    public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_career');
			$this->model_career->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/career');
    }
    
    public function add() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_career');
			$postdata = array();
			$postdata['name'] = $this->input->post('name');
			$postdata['designation'] = $this->input->post('designation');
			$postdata['description'] = $this->input->post('description');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_career->add($postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/career');
		}
		$this->getform();
    }	
    
    
    public function edit() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_career');
			$postdata = array();
			$postdata['name'] = $this->input->post('name');
			$postdata['designation'] = $this->input->post('designation');
			$postdata['description'] = $this->input->post('description');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_career->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/career');
		}
		$this->getform();
    }
    
    
    public function getform() {
		
		$this->load->model(adminpath.'/model_career');
		//$this->load->model(adminpath.'/model_category');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Career Manager',
		'href' => base_url().adminpath.'/career'
		);
				
		if (!$this->input->get('id')) {
			$data['breadcrumbs'][] = array(
			'text' => 'Add Career',
			'href' => '#'
			);
			$data['heading']="Add Career";
			$data['action'] = base_url().adminpath.'/career/add';
		} else {
			$data['breadcrumbs'][] = array(
			'text' => 'Edit Career',
			'href' => '#'
			);
			$data['heading']="Edit Career";
			$data['action'] = base_url().adminpath.'/career/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_career->getimage($this->input->get('id'));
    	}
		
		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
		
		if ($this->input->post('designation')) {
      		$data['designation'] = $this->input->post('designation');
    	} elseif (isset($info)) {
			$data['designation'] = $info->designation;
		} else {
      		$data['designation'] = '';
    	}

    	if ($this->input->post('description')) {
      		$data['description'] = $this->input->post('description');
    	} elseif (isset($info)) {
			$data['description'] = $info->description;
		} else {
      		$data['description'] = '';
    	}

    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}
		
		$data['cancel'] = base_url().adminpath.'/career';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/careerform',$data);
		$this->load->view(adminpath.'/footer');

	}
}