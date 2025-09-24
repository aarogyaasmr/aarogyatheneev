<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller {
	public function index()
	{
		$this->load->model('model_setting');

		$data=array();
		$data['page_title']="Career";
		$data['meta_keyword']="Career";
		$data['meta_description']="Career";
		$data['heading']="Career ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Career',
		'href' => base_url().'career'
		);

		//$data = array();
	    //$data['aboutinfo'] = $this->model_setting->aboutuspage();

		$data['alljobs']= array();	
    	$results = $this->model_setting->getjobs();
		if ($results) {
			foreach($results as $val) {
				$data['alljobs'][] = array(
					'name' => $val->name,
					'designation' => $val->designation,
					'description' => $val->description
				);
			}
		}

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('career',$data);
		$this->load->view('footer');
	}
}