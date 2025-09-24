<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventforms extends CI_Controller {

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
		'text' => 'Event Forms Manager',
		'href' => base_url().adminpath.'/eventforms'
		);
		$data['heading']="Event Forms Manager";
		$this->load->model(adminpath.'/model_eventforms');
		$data['alleventformss']= array();	

		$data['alleventformss']= array();	
    	$results = $this->model_eventforms->geteventformss();
		if ($results) {  
			foreach($results as $val){
				$data['alleventformss'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'email' => $val->email,
					'phone' => $val->phone,
					'education' => $val->education,
					'designation' => $val->designation,
					'address' => $val->address,
					'pincode' => $val->pincode,
					'eventname' => $val->eventname,
					'transactionid' => $val->transactionid,
					'date_added' => $val->date_added
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/eventforms/delete';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/eventforms',$data);
		$this->load->view(adminpath.'/footer');

    }

     public function delete(){

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_eventforms');
			$this->model_eventforms->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/eventforms');
    }


}