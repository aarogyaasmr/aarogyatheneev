<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videogallery extends CI_Controller {

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
		'text' => 'Video Gallery Manager',
		'href' => base_url().adminpath.'/videogallery'
		);
		$data['heading']="Video Gallery Manager";
		$this->load->model(adminpath.'/model_videogallerys');
		

		$data['allvideos']= array();	
    	$results = $this->model_videogallerys->getvideos();
		if ($results) {  
			foreach($results as $val){
				$data['allvideos'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'status' => $val->status,
					'href' => base_url().adminpath.'/videogallery/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/videogallery/delete';
		$data['activeaction'] = base_url().adminpath.'/videogallery/active';
		$data['inactiveaction'] = base_url().adminpath.'/videogallery/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/videogallerys',$data);
		$this->load->view(adminpath.'/footer');

    }
    public function active(){
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videogallerys');
			$this->model_videogallerys->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/videogallery');
    }

    public function inactive(){
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videogallerys');
			$this->model_videogallerys->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/videogallery');
    }

    public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videogallerys');
			$this->model_videogallerys->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/videogallery');
    }
    
    public function add() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videogallerys');
			$postdata = array();
			$postdata['home'] = $this->input->post('home');
			$postdata['name'] = $this->input->post('name');
			$category = $this->input->post('category');	
			$postdata['videourl'] = $this->input->post('videourl');
			$postdata['sortorder'] = $this->input->post('sortorder');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_videogallerys->add($postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/videogallery');
		}
		$this->getform();
		
    }
    
    public function edit() {
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_videogallerys');
			$postdata = array();
			$postdata['home'] = $this->input->post('home');
			$postdata['name'] = $this->input->post('name');		
			$category = $this->input->post('category');	
			$postdata['videourl'] = $this->input->post('videourl');
			$postdata['sortorder'] = $this->input->post('sortorder');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$this->model_videogallerys->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/videogallery');
		}
		$this->getform();
    }
    
    public function getform() {
		
		$this->load->model(adminpath.'/model_videogallerys');
		$this->load->model(adminpath.'/model_category');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Video Gallery Manager',
		'href' => base_url().adminpath.'/videogallery'
		);
				
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Video Gallery',
		'href' => '#'
		);
		$data['heading']="Add Video Gallery";
		$data['action'] = base_url().adminpath.'/videogallery/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Video Gallery',
		'href' => '#'
		);
		$data['heading']="Edit Video Gallery";
		$data['action'] = base_url().adminpath.'/videogallery/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_videogallerys->getvideo($this->input->get('id'));
    	}

        // 		$this->load->model(adminpath.'/model_videocategory');
        //     	$data['allvideocategory']= array();	
        //     	$results = $this->model_videocategory->getvideos();
        // 		if ($results) {  
        // 			foreach($results as $val){
        // 				$data['allvideocategory'][] = array(
        // 					'id' => $val->id,
        // 					'name' => $val->name,
        // 					'href' => base_url().adminpath.'/videocategory/edit?id=' . $val->id
        // 				);
        // 			}
        // 		}



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

    	if ($this->input->post('videocategory_id')) {
      		$data['videocategory_id'] = $this->input->post('videocategory_id');
    	} elseif (isset($info)) {
			$data['videocategory_id'] = $info->videocategory_id;
		} else {
      		$data['videocategory_id'] = '';
    	}

    	if ($this->input->post('sortorder')) {
      		$data['sortorder'] = $this->input->post('sortorder');
    	} elseif (isset($info)) {
			$data['sortorder'] = $info->sortorder;
		} else {
      		$data['sortorder'] = '';
    	}
    	
    	if ($this->input->post('videourl')) {
      		$data['videourl'] = $this->input->post('videourl');
    	} elseif (isset($info)) {
			$data['videourl'] = $info->videourl;
		} else {
      		$data['videourl'] = '';
    	}
		
    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

    	
    	$data['allvideocategory']= array();
    	$results = $this->model_videogallerys->getadminservices();
		if ($results) {
			foreach($results as $val) {
				$catchecked="";
				if($this->model_videogallerys->getvideocategory($data['id'],$val->id)) {
					$catchecked="checked";
				}
				$data['allvideocategory'][] = array(
					'id' => $val->id,
					'catchecked' =>$catchecked,
					'name' => $val->name
				);
			}
		}

		$data['cancel'] = base_url().adminpath.'/Model_videogallerys';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/videogallerysform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}