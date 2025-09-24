<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Services extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Our Services";
		$data['meta_keyword']="Our Services";
		$data['meta_description']="Our Services";
		$data['heading']="Our Services";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Our Services',
		'href' => base_url().'services'
		);
		
		$this->load->model('model_page');
	    $data['allservices'] = array();
	    $results = $this->model_page->getservice();
	    if ($results) {  
	  	    foreach($results as $val){		
		  		$data['allservices'][] = array(
		  			'name'             => $val->name,
		  			'colorclass'             => $val->colorclass,
		  			'icon'             => $val->icon
		  		);
		  	}
  
	    }
		
		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('service',$data);
		$this->load->view('footer');
	}
}