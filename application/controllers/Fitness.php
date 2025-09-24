<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fitness extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Fitness";
		$data['meta_keyword']="Aarogya the Neev | Fitness";
		$data['meta_description']="Aarogya the Neev | Fitness";
		$data['heading']="Fitness ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Reach us',
		'href' => base_url().'appointment'
		);
		$this->load->view('header',$data);
		$this->load->view('fitness',$data);
		$this->load->view('footer');
	}

}