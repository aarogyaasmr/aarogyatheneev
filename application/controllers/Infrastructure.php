<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Infrastructure extends CI_Controller {
	public function index()
	{
		$this->load->model('model_setting');

		$data=array();
		$data['page_title']="Infrastructure";
		$data['meta_keyword']="Infrastructure";
		$data['meta_description']="Infrastructure";
		$data['heading']="Infrastructure ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Infrastructure',
		'href' => base_url().'infrastructure'
		);

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('infrastructure',$data);
		$this->load->view('footer');
	}
}