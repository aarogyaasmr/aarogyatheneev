<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Client extends CI_Controller {
	public function index()
	{
		$this->load->model('model_clients');

		$data=array();
		$data['page_title']="Client";
		$data['meta_keyword']="Client";
		$data['meta_description']="Client";
		$data['heading']="Client";
		$data['breadcrumbs'][] = array(
			'text' => 'Home',
			'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Client',
			'href' => base_url().'client'
		);

        $data['clients'] = array();
        $results = $this->model_clients->getclients();
        if ($results) {
            foreach($results as $val) {
                if($val->image) {
                    $thumbpdfcap=resizeimage($val->image,270,150);
                    $image = $thumbpdfcap;
                }
                else {
                    $thumbpdfcap=resizeimage('no_image.jpg',100,100);
                    $image = $thumbpdfcap;
                }
                $data['clients'][] = array(
                    'name'             => $val->name,
                    'image'            => $image
                );
            }
        }

		//$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('client',$data);
		$this->load->view('footer');
	}
}