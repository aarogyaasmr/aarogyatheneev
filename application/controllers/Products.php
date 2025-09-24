<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		
		$this->load->model('model_category');
		$this->load->model('model_product');
		$parts = explode('/', $this->uri->uri_string());
		$keyword = end($parts);

		if($keyword) {
			$info = $this->model_category->getproductbyid($keyword);
			$data=array();
			$data['page_title']=$info->page_title;
			$data['meta_keyword']=$info->meta_keyword;
			$data['meta_description']=$info->meta_description;
			$data['heading']=$info->name;
			//$data['images']=$info->image;
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

			$data['allotherproduct']= array();	
	    	$results = $this->model_product->getotherproduct($info->type,$info->id);
			if ($results) {
				foreach($results as $val) {
					if($val->imagesec) {
                        $thumbpdfcap=UPLOADFILE.$val->imagesec;
                        $image = $thumbpdfcap;
                        $style = '';
                    }
                    else {
                        $thumbpdfcap=UPLOADFILE.'no_image.png';
                        $image = $thumbpdfcap;
                        $style = "padding: 105px;";
                    }
                    $data['allotherproduct'][] = array(
                        'name'             => $val->name,
                        'image'            => $image,
                        'style'            => $style,
                        'shortdescription' => substr($val->shortdescription,0,120),
                        'linkname'      => $val->linkname
                    );
				}
			}


			if (isset($info)) {
		  		if($info->icon) {	
					$thumbimage=UPLOADFILE.$info->icon;
					$data['image'] = $thumbimage;
				}
				else {
					$thumbimage=resizeimage('no_image.png',95,330);
					$data['image'] = $thumbimage;
				}
  		  	}
  		  	else {
				$thumbimage=resizeimage('no_image.png',95,330);
				$data['image'] = $thumbimage;
			}

			if (isset($info)) {
				$data['name'] = $info->name;
			} else {
	      		$data['name'] = '';
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
			
			// if (isset($info)) {
			// 	$data['images'] = $info->image;
			// } else {
		  	//     		$data['images'] = '';
		  	//   	}			
					
			  //   	if (isset($info)) {
					// 	$data['price'] = $info->price;
					// } else {
			  //     		$data['price'] = '';
			  //   	}

			  //   	if (isset($info)) {
					// 	$data['mrpprice'] = $info->mrpprice;
					// } else {
			  //     		$data['mrpprice'] = '';
			  //   	}

			  //   	if (isset($info)) {
					// 	$data['description'] = $info->description;
					// } else {
			  //     		$data['description'] = '';
			  //   	}
					// if (isset($info)) {
					// 	$data['deturl'] = $info->deturl;
					// } else {
			  //     		$data['deturl'] = '';
			  //   	}
					
					// if (isset($info)) {
					// 	$data['feature'] = $info->feature;
					// } else {
			  //     		$data['feature'] = '';
			  //   	}
					
					// if (isset($info)) {
					// 	$data['author'] = $info->author;
					// } else {
			  //     		$data['author'] = '';
			  //   	}
				
					// if (isset($info)) {
					// 	$data['sku'] = $info->sku;
					// } else {
			  //     		$data['sku'] = '';
			  //   	}
					
					// if (isset($info)) {
					// 	$data['categorydata'] = $info->categorydata;
					// } else {
			  //     		$data['categorydata'] = '';
			  //   	}
					
					// if (isset($info)) {
					// 	$data['tags'] = $info->tags;
					// } else {
			  //     		$data['tags'] = '';
			  //   	}
					
					// if (isset($info)) {
					// 	$data['year'] = $info->year;
					// } else {
			  //     		$data['year'] = '';
			  //   	}
					
			  //       if (isset($info)) {
					// 	$data['ordernum'] = $info->ordernum;
					// } else {
			  //     		$data['ordernum'] = '';
			  //   	}

			$data['breadcrumbs'][] = array(
				'text' => $info->name,
				'href' => ''
			);

		  	$this->load->model('model_page'); 
		  	$this->load->model('model_setting'); 
		  	$this->load->model('model_news');    
		   	$this->load->model('model_blog');    
		    
		   	$data['testimonials'] = array();
		    $results = $this->model_setting->gettestimonials();
		    if ($results) {  
		  	    foreach($results as $val){
			  		if($val->image) {
			  			$thumbpdfcap=resizeimage($val->image,100,100);
			  			$image = $thumbpdfcap;
			  		}
			  		else {
			  			$thumbpdfcap=resizeimage('no_image.jpg',100,100);
			  			$image = $thumbpdfcap;
			  		}		
			  		$data['testimonials'][] = array(
			  			'name'             => $val->name,
			  			'image'             => $image,
			  			'designation'      => $val->designation,
			  			'shortdescription' => $val->shortdescription
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
		  
		   	$noblog=1;
			$data['allnews']= array();	
	    	$results = $this->model_news->getallnews();
			if ($results) {  
				foreach($results as $val){
				  	$noblog++;
					if($val->image) {	
						$thumbimage=resizeimage($val->image,400,267);
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
						'startdate' => $val->date_added,
						'enddate' => $val->enddate,
						'image' => $image,
						'href' => base_url().'blogdtails/' . $val->linkname
					);
				  	if($noblog==4) { break; }
				}
			}

			

  			$data['homenews']= array();	
		  	$results = $this->model_news->getnewss();
		  	if ($results) {  
			  	foreach($results as $val){
				  	if($val->image) {	
					  	$thumbimage=resizeimage($val->image,400,267);
				 	 	$image = $thumbimage;
					  	$bigimage = UPLOADFILE.$val->image;
				  	}
				  	else {
					  	$thumbimage=resizeimage('no_image.jpg',400,267);
					  	$image = $thumbimage;
					  	$bigimage = UPLOADFILE.'no_image.jpg';
				  	}
				  	$data['homenews'][] = array(
					  'id'               => $val->id,
					  'name'             => $val->name,
					  'subhead'          => $val->subhead,
					  'date_added'       => $val->date_added,
					  'shortdescription' => $val->shortdescription,
					  'image'            => $image,
					  'linkname'         => base_url().'blogdtails/' .$val->linkname	
				  	);
		  		}
	  		}
  			
  			$data['action'] = base_url('contactus/saveproject');
			$this->load->view('header',$data);
			$this->load->view('products',$data);
			$this->load->view('footer');

		}
		else {
    		redirect('home');
		}
	}


}
