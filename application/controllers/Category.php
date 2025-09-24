<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Category extends CI_Controller {



	public function index()

	{

		

		$this->load->model('model_category');

		$this->load->model('model_product');

		$parts = explode('/', $this->uri->uri_string());

		$keyword = end($parts);

		if($keyword){

		

			$info = $this->model_category->getkeywordcategory($keyword);



			$data=array();



			$data['page_title']=$info->page_title;

			$data['meta_keyword']=$info->meta_keyword;

			$data['meta_description']=$info->meta_description;

			$data['heading']=$info->name;
			$data['subname']=$info->subname;
			$data['linkname']=$info->linkname;
			$data['id']=$info->id;

			$data['banner']=$info->banner;
            $data['image']=$info->image;
			$data['description']=$info->description;
            $data['shortdescription']=$info->shortdescription;
			$data['breadcrumbs'][] = array(

			'text' => 'Home',

			'href' => base_url()

			);

					

			

			$path = '';



			foreach ($parts as $keyword) {

				if (!$path) {

					$path = $keyword;

				} else {

					$path .= '/' . $keyword;

				}



				$category_info = $this->model_category->getkeywordcategory($keyword);

				

				if ($category_info) {

	       			$data['breadcrumbs'][] = array(

   	    				'text'      => $category_info->name,

						'href'      => base_url().$path,

        			);

				}

			}	

			

		

			



			$data['allcats']= array();	
	    	$results = $this->model_category->getsubcategory($info->id);
			if ($results) {
				foreach($results as $val){
					if($val->image) {	
						$thumbimage=resizeimage($val->image,400,450);
						$image = $thumbimage;
					}
					else {
						$thumbimage=resizeimage('no_image.jpg',400,450);
						$image = $thumbimage;
					}
					$data['allcats'][] = array(
						'id' => $val->id,
						'name' => $val->name,	
						'subname' => $val->subname,
						'icon' => $val->icon,
						'homelist' => $val->homelist,
						'shortdescription' => $val->shortdescription,	
						'image' => $image,	
						'href'  => base_url().$path . '/' . $val->linkname
					);
				}
			}



			

			

			$data['allproducts']= array();	

	    	$results = $this->model_product->getproductcategory($info->id);



			if ($results) {

				foreach($results as $val){

					if($val->image) {	

						$thumbimage=resizeimage($val->image,300,429);

						$image = $thumbimage;

					}

					else {

						$thumbimage=resizeimage('no_image.jpg',300,429);

						$image = $thumbimage;

					}



					$data['allproducts'][] = array(

						'id'                => $val->id,
						'name'              => $val->name,						
						'feature'           => $val->feature,						
						'bookformat'           => $val->bookformat,
						'mrpprice'          => $val->mrpprice,					
						'latest'            => $val->latest,
						'price'             => $val->price,
						'image'             => $image,
						'images'            => $val->image,
						'linkname' => base_url('').$val->id,

					);

				}

			}
			
			
			
			
			
			
			
			
			
			
			
  
  	$data['homeservices'] = array();
		$catresults = $this->model_category->gethomecategorys(0);
		if ($catresults){
			foreach($catresults as $catval){
				$products = array();
				$results = $this->model_category->gethomecategorys($catval->id);
				if ($results){
					foreach($results as $val){
						
					
						
						
						
						
						$products[] = array(
							'id' => $val->id,
							'name' => $val->name,
							'icon' => $val->icon,
						
							'href'  => base_url(). $catval->linkname."/" . $val->linkname

						);

						}
					}



				$data['homeservices'][] = array(
					'id' => $catval->id,
					'home' => $catval->home,
					'name' => $catval->name,					
					'products' => $products

				);

				}

			}
			



			$this->load->view('header',$data);

			$this->load->view('category',$data);

			$this->load->view('footer');

		}

		else {

    		redirect('home');

		}

	}

	public function details(){

		$this->load->model('model_product');

		$data="";



		$data['page_title']="Products";

		$data['meta_keyword']="Products";

		$data['meta_description']="Products";

		$data['heading']="Products";

		$data['breadcrumbs'][] = array(

		'text' => 'Home',

		'href' => base_url()

		);

				

		$data['breadcrumbs'][] = array(

		'text' => 'Products',

		'href' => base_url().'products'

		);





		$parts = explode('/', $this->uri->uri_string());

		$keyword = end($parts);

		if($keyword){

			$info = $this->model_product->getproduct($keyword);



			$data['breadcrumbs'][] = array(

			'text' => $info->name,

			'href' => base_url().'products/'.$info->linkname

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

	    		if($info->image) {	

						$thumbimage=resizeimage($info->image,600,300);

						$data['image'] = $thumbimage;

					}

				else {

						$thumbimage=resizeimage('no_image.jpg',600,300);

						$data['image'] = $thumbimage;

					}

	    	}

	    	else {

					$thumbimage=resizeimage('no_image.jpg',600,300);

					$data['image'] = $thumbimage;

			}



			$this->load->view('header',$data);

			$this->load->view('productdetail',$data);

			$this->load->view('footer');

		}

		else {

    		redirect('home');

		}





	}



}

