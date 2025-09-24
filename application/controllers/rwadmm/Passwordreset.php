<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passwordreset extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_user');
			$postdata = array();
			$category = $this->input->post('category');
			$postdata['user_name'] = $this->input->post('user_name');
			$postdata['user_password'] = md5($this->input->post('user_password'));
			$this->model_user->updateprofile($postdata);
			$this->session->set_flashdata('passwordresetnotify', 'Your profile has been successfully updated.');
			redirect(adminpath.'/passwordreset');
		}

		$this->getform();

    }

    public function getform() {
		
		$this->load->model(adminpath.'/model_user');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Password Reset',
		'href' => base_url().adminpath.'/passwordreset'
		);
				
		$data['heading']="Password Reset";

		$data['action'] = base_url().adminpath.'/passwordreset';


      	$info = $this->model_user->userinfo($this->session->userdata['logged_in']['username']);

		
		
		if ($this->input->post('user_name')) {
      		$data['user_name'] = $this->input->post('user_name');
    	} elseif (isset($info)) {
			$data['user_name'] = $info[0]->user_name;
		} else {
      		$data['user_name'] = '';
    	}
		
		
		
		if ($this->input->post('user_password')) {
      		$data['user_password'] = $this->input->post('user_password');
    	} elseif (isset($info)) {
			$data['user_password'] = $info[0]->user_password;
		} else {
      		$data['user_password'] = '';
    	}
		
		
		


		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/passwordreset',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}