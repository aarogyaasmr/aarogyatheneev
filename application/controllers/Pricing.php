<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pricing extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Our Pricing";
		$data['meta_keyword']="Our Pricing";
		$data['meta_description']="Our Pricing";
		$data['heading']="Our Pricing";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'About us',
		'href' => base_url().'pricing'
		);
		
		$this->load->model('model_page');
	    $data['allpricing'] = array();
	    $results = $this->model_page->getpricing();
	    if ($results) {  
	  	    foreach($results as $val){		
		  		$data['allpricing'][] = array(
		  			'name'             => $val->name,
		  			'best_for'             => $val->best_for,
		  			'minimum'      => $val->minimum,
		  			'pricing'      => $val->pricing,
		  			'colorclass' => $val->colorclass
		  		);
		  	}
  
	    }
		
		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('price',$data);
		$this->load->view('footer');
	}
}