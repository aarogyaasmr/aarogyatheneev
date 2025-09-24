<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$this->load->model('model_news');
		//$data="";

		$data['page_title']="Aarogya with Bhumika | Videos";
		$data['meta_keyword']="Aarogya with Bhumika | Videos";
		$data['meta_description']="Aarogya with Bhumika | Videos";
		$data['heading']="Videos";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Videos',
		'href' => base_url().'video'
		);

		$this->load->model('model_setting');
		$this->load->model('model_video');

		$data['mainurl']=base_url('video');

	  	$data['videos'] = array();
	  	$results = $this->model_video->getallvideo();
	  	$i=1;
	  	if ($results) {  
		  	foreach($results as $val) {
		  		$data['videos'][] = array(
		  			'sn'             => $i,
		  			'id'             => $val->id,
		  			'name'             => $val->name,
		  			'videourl'             => $val->videourl
		  		);
		  		$i++;
		  	}
	  	}

		$this->load->view('header',$data);
		$this->load->view('video',$data);
		$this->load->view('footer');
	}

}