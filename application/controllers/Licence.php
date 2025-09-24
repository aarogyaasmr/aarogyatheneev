<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Licence extends CI_Controller {
	public function index()
	{
		$this->load->model('model_setting');
		$data=array();
		$data['page_title']="Licence";
		$data['meta_keyword']="Licence";
		$data['meta_description']="Licence";
		$data['heading']="Licence ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Licence',
		'href' => base_url().'licence'
		);

		//$data = array();
	    //$data['aboutinfo'] = $this->model_setting->aboutuspage();

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('licence',$data);
		$this->load->view('footer');
	}
}