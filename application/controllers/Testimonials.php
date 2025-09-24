<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testimonials extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Bond Shine Clinic | Testimonials";
		$data['meta_keyword']="Here is the genuine feedback of our services. Take a look at our customers' experiences.";
		$data['meta_description']="Here is the genuine feedback of our services. Take a look at our customers' experiences.";
		$data['heading']="Testimonials ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);			

		$data['breadcrumbs'][] = array(
		'text' => 'Testimonials',
		'href' => base_url().'testimonials'
		);

	    $this->load->model('model_setting');
	    $data['testimonials'] = array();
	    $results = $this->model_setting->gettestimonials();
	    if ($results) {  
	  	    foreach($results as $val){
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
		  			'image'             => $image,
		  			'designation'      => $val->designation,
		  			'description'      => $val->description,
		  			'shortdescription' => $val->shortdescription
		  		);
		  	}
	    }

		$this->load->view('header',$data);
		$this->load->view('testimonial',$data);
		$this->load->view('footer');

	}

}