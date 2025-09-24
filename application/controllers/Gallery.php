<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index()
	{
		$this->load->model('model_gallery');
		//$data="";

		$data['page_title']="Gallery";
		$data['meta_keyword']="Gallery";
		$data['meta_description']="Gallery";
		$data['heading']="Gallery";

		$data['breadcrumbs'][] = array(
			'text' => 'Home',
			'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
			'text' => 'Gallery',
			'href' => base_url().'gallery'
		);

		$data['allimages']= array();	
    	$results = $this->model_gallery->getgallerys();
    	$totalgal = count($results);
		if ($results) {
			$i=1;
			foreach($results as $val) {
				if($val->image) {
					// $thumbimage=resizeimage($val->image,600,497);
					// $image = $thumbimage;
					$image = UPLOADFILE.$val->image;
				}
				else {
					$thumbimage=resizeimage('no_image.jpg',600,497);
					$image = $thumbimage;
					//$bigimage = UPLOADFILE.'no_image.jpg';
				}

				$data['allimages'][] = array(
					'sn' => $i,
					'id' => $val->id,
					'ttl' => $totalgal,
					'name' => $val->name,
					'image' => $image
				);
				$i++;
			}
		}

		$this->load->view('header',$data);
		$this->load->view('gallery',$data);
		$this->load->view('footer');
	}
}