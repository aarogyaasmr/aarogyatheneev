<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invitearvind extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Invite Arvind";
		$data['meta_keyword']="Invite Arvind";
		$data['meta_description']="Invite Arvind";
		$data['heading']="Invite Arvind ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);			

		$data['breadcrumbs'][] = array(
		'text' => 'Invite Arvind',
		'href' => base_url().'invitearvind'
		);
		$data['firstformaction'] = base_url('invitearvind/savefirstform');

		$this->load->view('header',$data);
		$this->load->view('invitearvind',$data);
		$this->load->view('footer');

	}

}

