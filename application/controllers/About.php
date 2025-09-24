<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
	public function index()
	{
		$this->load->model('model_setting');
		
		$data=array();
		$data['page_title']="About us";
		$data['meta_keyword']="About us";
		$data['meta_description']="About us";
		$data['heading']="About Us ";
		$data['breadcrumbs'][] = array(
			'text' => 'Home',
			'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
			'text' => 'About us',
			'href' => base_url().'aboutus'
		);

		//$data = array();
	    $data['aboutinfo'] = $this->model_setting->aboutuspage();

	    $data['testimonials'] = array();
	    $results = $this->model_setting->gettestimonials();
        if ($results) {
	  	    foreach($results as $val) {
		  		if($val->image) {
		  			$thumbpdfcap=resizeimage($val->image,100,100);
		  			$image = $thumbpdfcap;
		  		}
		  		else {
		  			$thumbpdfcap=resizeimage('no_image.jpg',100,100);
		  			$image = $thumbpdfcap;
		  		}
		  		$data['testimonials'][] = array(
		  			'name'             => $val->name,
		  			'image'            => $image,
		  			'designation'      => $val->designation,
		  			'shortdescription' => $val->shortdescription
		  		);
  	        }
        }

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('aboutus',$data);
		$this->load->view('footer');
	}
}