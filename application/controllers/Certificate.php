<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Certificate extends CI_Controller {
	public function index()
	{
		$this->load->model('model_setting');

		$data=array();
		$data['page_title']="Certification";
		$data['meta_keyword']="Certification";
		$data['meta_description']="Certification";
		$data['heading']="Certification ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Certification',
		'href' => base_url().'certificate'
		);

		//$data = array();
	    //$data['aboutinfo'] = $this->model_setting->aboutuspage();

		$data['allcertificate']= array();	
    	$results = $this->model_setting->getcertificate();
		if ($results) {
			foreach($results as $val) {
				if($val->image) {	
				  	$thumbimage=$val->image;
			 	 	$image = $thumbimage;
				  	$bigimage = UPLOADFILE.$val->image;
			  	}
			  	else {
				  	//$thumbimage=resizeimage('no_image.jpg',400,267);
				  	//$image = $thumbimage;
				  	$bigimage = UPLOADFILE.'no_image.jpg';
			  	}
				$data['allcertificate'][] = array(
					'name' => $val->name,
					'image' => $bigimage
				);
			}
		}

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('certification',$data);
		$this->load->view('footer');
	}
}