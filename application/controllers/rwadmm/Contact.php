<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Contact extends CI_Controller {



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

		'text' => 'Contact Enquiry',

		'href' => base_url().adminpath.'/contact'

		);

		$data['heading']="Contact Enquiry";

		$this->load->model(adminpath.'/model_contact');

		$data['allcontactleads']= array();	

    	$results = $this->model_contact->getcontactlead();

		if ($results) {  

			foreach($results as $val){

				$data['allcontactleads'][] = array(

					'id' => $val->id,

					'name' => $val->name,

					'email' => $val->email,

					'projectdetail' => $val->message,

					'date' => $val->date_added

				);

			}

		}

		

		$data['deleteaction'] = base_url().adminpath.'/contact/delete';

		$this->load->view(adminpath.'/header');

		$this->load->view(adminpath.'/contacts',$data);

		$this->load->view(adminpath.'/footer');

    }

    

    public function delete() {

		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_contact');

			$this->model_contact->delete($_POST['table_records']);

    	}

    	redirect(adminpath.'/contact');

    }

    

}