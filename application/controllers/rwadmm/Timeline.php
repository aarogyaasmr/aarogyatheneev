<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_timeline');
			$postdata = array();
			
			$postdata['timelineh1'] = $this->input->post('timelineh1');
			$postdata['timelined1'] = $this->input->post('timelined1');
			$postdata['timelineh2'] = $this->input->post('timelineh2');
			$postdata['timelined2'] = $this->input->post('timelined2');
			$postdata['timelineh3'] = $this->input->post('timelineh3');
			$postdata['timelined3'] = $this->input->post('timelined3');
			$postdata['timelineh4'] = $this->input->post('timelineh4');
			$postdata['timelined4'] = $this->input->post('timelined4');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			
			$this->model_timeline->updatetimeline($postdata);
			$this->session->set_flashdata('settingnotify', 'Your about has been successfully updated.');
			redirect(adminpath.'/timeline');
		}

		$this->getform();

    }

    public function getform() {
		
		$this->load->model(adminpath.'/model_timeline');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Timeline',
		'href' => base_url().adminpath.'/timeline'
		);

		$data['heading']="Timeline";

		$data['action'] = base_url().adminpath.'/timeline';

      	$info = $this->model_timeline->timelineinfo();

    	if ($this->input->post('timelineh1')) {
      		$data['timelineh1'] = $this->input->post('timelineh1');
    	} elseif (isset($info)) {
			$data['timelineh1'] = $info[0]->timelineh1;
		} else {
      		$data['timelineh1'] = '';
    	}
    	if ($this->input->post('timelined1')) {
      		$data['timelined1'] = $this->input->post('timelined1');
    	} elseif (isset($info)) {
			$data['timelined1'] = $info[0]->timelined1;
		} else {
      		$data['timelined1'] = '';
    	}
    	
    	if ($this->input->post('timelineh2')) {
      		$data['timelineh2'] = $this->input->post('timelineh2');
    	} elseif (isset($info)) {
			$data['timelineh2'] = $info[0]->timelineh2;
		} else {
      		$data['timelineh2'] = '';
    	}
    	if ($this->input->post('timelined2')) {
      		$data['timelined2'] = $this->input->post('timelined2');
    	} elseif (isset($info)) {
			$data['timelined2'] = $info[0]->timelined2;
		} else {
      		$data['timelined2'] = '';
    	}
    	
    	if ($this->input->post('timelineh3')) {
      		$data['timelineh3'] = $this->input->post('timelineh3');
    	} elseif (isset($info)) {
			$data['timelineh3'] = $info[0]->timelineh3;
		} else {
      		$data['timelineh3'] = '';
    	}
    	if ($this->input->post('timelined3')) {
      		$data['timelined3'] = $this->input->post('timelined3');
    	} elseif (isset($info)) {
			$data['timelined3'] = $info[0]->timelined3;
		} else {
      		$data['timelined3'] = '';
    	}
    	
    	if ($this->input->post('timelineh4')) {
      		$data['timelineh4'] = $this->input->post('timelineh4');
    	} elseif (isset($info)) {
			$data['timelineh4'] = $info[0]->timelineh4;
		} else {
      		$data['timelineh4'] = '';
    	}
    	if ($this->input->post('timelined4')) {
      		$data['timelined4'] = $this->input->post('timelined4');
    	} elseif (isset($info)) {
			$data['timelined4'] = $info[0]->timelined4;
		} else {
      		$data['timelined4'] = '';
    	}
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/admintimeline',$data);
		$this->load->view(adminpath.'/footer');

	}
}