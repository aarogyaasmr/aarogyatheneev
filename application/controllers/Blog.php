<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->model('model_blog');
		//$data="";

		$data['page_title']="Bond Shine Clinic | Blogs";
		$data['meta_keyword']="Enhance your knowledge about laser treatments with our informational blogs.";
		$data['meta_description']="Enhance your knowledge about laser treatments with our informational blogs.";
		$data['heading']="Blogs";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Blogs',
		'href' => base_url().'blog'
		);

		$data['allnews']= array();	
    	$results = $this->model_blog->getallblog();
		if ($results) {
			foreach($results as $val) {
				if($val->banner) {	
					$thumbimage=resizeimage($val->banner,400,267);
					$image = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.jpg',400,267);
					$image = $thumbimage;
				}
				$data['allnews'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'date_added' => $val->date_added,
					'shortdescription' => $val->shortdescription,
					'image' => $image,
					'href' => base_url().'blog/' . $val->linkname
				);
			}
		}

		$data['allcurrent']= array();	
    	$results = $this->model_blog->getcurrentblog();
		if ($results) {
			foreach($results as $val) {
				if($val->banner) {	
					$thumbimage=resizeimage($val->banner,100,100);
					$image = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.jpg',100,100);
					$image = $thumbimage;
				}
				$data['allcurrent'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'date_added' => $val->date_added,
					'shortdescription' => $val->shortdescription,
					'image' => $image,
					'href' => base_url().'blog/' . $val->linkname
				);
			}
		}

		$this->load->view('header',$data);
		$this->load->view('blog',$data);
		$this->load->view('footer');
	}

	public function details() {
		$this->load->model('model_blog');
		//$data="";
		$data['heading']="News & Events";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'News',
		'href' => base_url().'blogdtails'
		);


		$parts = explode('/', $this->uri->uri_string());
		$keyword = end($parts);
		if($keyword){
			$info = $this->model_blog->getblog($keyword);

			$data['breadcrumbs'][] = array(
			'text' => $info->name,
			'href' => base_url().'blog/'.$info->linkname
			);

			if (isset($info)) {
				$data['name'] = $info->name;
			} else {
	      		$data['name'] = '';
	    	}

	    	if (isset($info)) {
				$data['linkname'] = $info->linkname;
			} else {
	      		$data['linkname'] = '';
	    	}

	    	if (isset($info)) {
				$data['page_title'] = $info->page_title;
			} else {
	      		$data['page_title'] = '';
	    	}

	    	if (isset($info)) {
				$data['meta_keyword'] = $info->meta_keyword;
			} else {
	      		$data['meta_keyword'] = '';
	    	}

	    	if (isset($info)) {
				$data['meta_description'] = $info->meta_description;
			} else {
	      		$data['meta_description'] = '';
	    	}

	    	if (isset($info)) {
				$data['shortdescription'] = $info->shortdescription;
			} else {
	      		$data['shortdescription'] = '';
	    	}

	    	if (isset($info)) {
				$data['description'] = $info->description;
			} else {
	      		$data['description'] = '';
	    	}

            if (isset($info)) {
				$data['images'] = $info->banner;
			} else {
	      		$data['images'] = '';
	    	}

	    	if (isset($info)) {
				$data['images1'] = $info->banner1;
			} else {
	      		$data['images1'] = '';
	    	}

	    	if (isset($info)) {
				$data['images2'] = $info->banner2;
			} else {
	      		$data['images2'] = '';
	    	}

            if (isset($info)) {
				$data['date_added'] = $info->date_added;
			} else {
	      		$data['date_added'] = '';
	    	}

	    	if (isset($info)) {
	    		if($info->banner) {	
					$thumbimage=UPLOADFILE.$info->banner;
					$data['image'] = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.png',900,400);
					$data['image'] = $thumbimage;
				}
	    	}
	    	else {
				$thumbimage=resizeimage('no_image.png',900,400);
				$data['image'] = $thumbimage;
			}
			
			if (isset($info)) {
	    		if($info->banner1) {	
					$thumbimage=UPLOADFILE.$info->banner1;
					$data['image1'] = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.png',900,400);
					$data['image1'] = $thumbimage;
				}
	    	}
	    	else {
				$thumbimage="";
				$data['image1'] = $thumbimage;
			}
			
			if (isset($info)) {
	    		if($info->banner2) {	
					$thumbimage=UPLOADFILE.$info->banner2;
					$data['image2'] = $thumbimage;
				}
				else {
					$thumbimage="";
					$data['image2'] = $thumbimage;
				}
	    	}
	    	else {
				$thumbimage=resizeimage('no_image.png',900,400);
				$data['image2'] = $thumbimage;
			}
			
			
			$data['allnews']= array();	
	    	$results = $this->model_blog->getallblog();
			if ($results) {  
				foreach($results as $val){
					if($val->banner) {	
						$thumbimage=resizeimage($val->banner,200,133);
						$image = $thumbimage;
					}
					else {
						$thumbimage=resizeimage('no_image.jpg',200,133);
						$image = $thumbimage;
					}

					$data['allnews'][] = array(
						'id' => $val->id,
						'name' => $val->name,
						'date_added' => $val->date_added,
						'image' => $image,
						'href' => base_url().'blog/' . $val->linkname
					);
				}
			}
			$this->load->view('header',$data);
			$this->load->view('blogdtails',$data);
			$this->load->view('footer');
		}
		else {
    		redirect('home');
		}

	}

}

