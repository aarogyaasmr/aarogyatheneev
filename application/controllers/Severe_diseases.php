<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Severe_diseases extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Health Issues";
		$data['meta_keyword']="Aarogya the Neev | Health Issues";
		$data['meta_description']="Aarogya the Neev | Health Issues";
		$data['heading']="Health Issues ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Reach us',
		'href' => base_url().'appointment'
		);
		$this->load->view('header',$data);
		$this->load->view('severediseases',$data);
		$this->load->view('footer');
	}

}