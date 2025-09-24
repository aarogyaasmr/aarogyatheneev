<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fitness_transformation extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Fitness Transformation";
		$data['meta_keyword']="Aarogya the Neev | Fitness Transformation";
		$data['meta_description']="Aarogya the Neev | Fitness Transformation";
		$data['heading']="Fitness Transformation ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Fitness Transformation',
		'href' => base_url().'fitness_transformation'
		);
		$this->load->view('header',$data);
		$this->load->view('fitness-transformation.php',$data);
		$this->load->view('footer');
	}

}