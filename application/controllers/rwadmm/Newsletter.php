<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        $data=array();
        $data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Newsletter Subscriber Manager',
		'href' => base_url().adminpath.'/newsletter'
		);
		$data['heading']="Newsletter Subscriber Manager";
		$this->load->model(adminpath.'/model_newsletter');
		$data['allheaderbanners']= array();	
    	$results = $this->model_newsletter->getnewsletteremail();
		if ($results) {  
			foreach($results as $val){

				$data['allheaderbanners'][] = array(
					'id' => $val->id,
					'email' => $val->email,
					
					'status' => $val->status,
					'href' => base_url().adminpath.'/newsletter/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/newsletter/delete';
		$data['activeaction'] = base_url().adminpath.'/newsletter/active';
		$data['inactiveaction'] = base_url().adminpath.'/newsletter/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/newsletter',$data);
		$this->load->view(adminpath.'/footer');

    }
    
    public function active(){
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_newsletter');
			$this->model_newsletter->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/newsletter');
    }
    
    public function inactive() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_newsletter');
			$this->model_newsletter->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/newsletter');
    }
    
    public function delete() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_newsletter');
			$this->model_newsletter->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/newsletter');
    }
    
    public function add() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_newsletter');
			$postdata = array();
			$postdata['email'] = $this->input->post('email');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_newsletter->add($postdata);
			$this->session->set_flashdata('newsletternotify', 'Username and Password not Valid.');
			redirect(adminpath.'/newsletter');
		}
		$this->getform();
    }
    
    public function edit() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_newsletter');
			$postdata = array();
			$postdata['email'] = $this->input->post('email');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_newsletter->edit($this->input->get('id'),$postdata);
			$this->session->set_flashdata('newsletternotify', 'Username and Password not Valid.');
			redirect(adminpath.'/newsletter');
		}
		$this->getform();
    }
    
    public function getform() {

		$this->load->model(adminpath.'/model_newsletter');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Newsletter Subscriber Manager',
		'href' => base_url().adminpath.'/image'
		);

		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Newsletter Subscriber',
		'href' => '#'
		);
		$data['heading']="Add Newsletter Subscriber";
		$data['action'] = base_url().adminpath.'/newsletter/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Newsletter Subscriber',
		'href' => '#'
		);
		$data['heading']="Edit Newsletter Subscriber";
		$data['action'] = base_url().adminpath.'/newsletter/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_newsletter->getheaderbanner($this->input->get('id'));
    	}

		if ($this->input->post('email')) {
      		$data['email'] = $this->input->post('email');
    	} elseif (isset($info)) {
			$data['email'] = $info->email;
		} else {
      		$data['email'] = '';
    	}
		
		$data['cancel'] = base_url().adminpath.'/newsletter';

		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/newsletterform',$data);
		$this->load->view(adminpath.'/footer');

	}
}