<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Team extends CI_Controller {
	public function index()
	{
		$this->load->model('model_team');

		$data=array();
		$data['page_title']="Aarogya with Bhumika | Our Team";
		$data['meta_keyword']="Aarogya with Bhumika | Our Team";
		$data['meta_description']="Aarogya with Bhumika | Our Team";
		$data['heading']="Our Team ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Our Team',
		'href' => base_url().'team'
		);

		$data['teams'] = array();
        $results = $this->model_team->getteam();
        if ($results) {
            foreach($results as $val) {
                if($val->image) {
                    $thumbpdfcap=UPLOADFILE.$val->image;
                    $image = $thumbpdfcap;
                }
                else {
                    $thumbpdfcap=resizeimage('no_image.png',100,100);
                    $image = $thumbpdfcap;
                }
                $data['teams'][] = array(
                    'name'             => $val->name,
                    'image'            => $image,
                    'designation'      => $val->designation,
                    'shortdescription' => $val->shortdescription,
                    'linkedin'         => $val->linkedin,
                    'email'            => $val->email
                );
            }
        }

		//$data = array();
	    //$data['aboutinfo'] = $this->model_setting->aboutuspage();

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('team',$data);
		$this->load->view('footer');
	}
}