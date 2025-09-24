<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mentalhealth extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Mental Health";
		$data['meta_keyword']="Aarogya the Neev | Mental Health";
		$data['meta_description']="Aarogya the Neev | Mental Health";
		$data['heading']="Mental Health ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Reach us',
		'href' => base_url().'appointment'
		);
		$this->load->view('header',$data);
		$this->load->view('mentalhealth',$data);
		$this->load->view('footer');
	}

}