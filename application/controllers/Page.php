<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->model('model_page');
		$this->load->model('model_setting');
		$this->load->model('model_clients');
		$this->load->model('model_product');

		 
		$data=array();
		$parts = explode('/', $this->uri->uri_string());
		$keyword = end($parts);
		if($keyword){

		
		$info = $this->model_page->getkeywordpage($keyword);

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);
				
		$data['breadcrumbs'][] = array(
		'text' => $info->name,
		'href' => base_url().$info->linkname
		);

		if (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
    	
    		if (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '';
    	}

    	
		
		if (isset($info)) {
			$data['subname'] = $info->subname;
		} else {
      		$data['subname'] = '';
    	}
		
		if (isset($info)) {
			$data['iconasow'] = $info->iconasow;
		} else {
      		$data['iconasow'] = '';
    	}
		
		
		if (isset($info)) {
			$data['home'] = $info->home;
		} else {
      		$data['home'] = '';
    	}
		
		
			if (isset($info)) {
			$data['images'] = $info->image;
		} else {
      		$data['images'] = '';
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
			$data['homelist'] = $info->homelist;
		} else {
      		$data['homelist'] = '';
    	}
		
		
		if (isset($info)) {
			$data['image'] = $info->image;
		} else {
      		$data['image'] = '';
    	}


			if (isset($info)) {
			$data['newimage'] = $info->newimage;
		} else {
      		$data['newimage'] = '';
    	}

    	if (isset($info)) {
			$data['description'] = $info->description;
		} else {
      		$data['description'] = '';
    	}

    	//if (isset($info)) {
//    		if($info->image) {	
//					$thumbimage=resizeimage($info->image,459,709);
//					$data['image'] = $thumbimage;
//				}
//			else {
//					$thumbimage=resizeimage('no_image.jpg',459,709);
//					$data['image'] = $thumbimage;
//				}
//    	}
//    	else {
//				$thumbimage=resizeimage('no_image.jpg',459,709);
//				$data['image'] = $thumbimage;
//		}
    	if (isset($info)) {
    		if($info->banner) {	
					$thumbimage=resizeimage($info->banner,1920,1300);
					$data['banner'] = $thumbimage;
				}
			else {
					$thumbimage=resizeimage('no_image.png',1920,1300);
					$data['banner'] =$thumbimage;
				}
    	}
		else {
				$thumbimage=resizeimage('no_image.png',1920,1300);
				$data['banner'] = $thumbimage;
			}

    	if (isset($info)) {
    		if($info->pdf) {	
					$data['pdf'] = "<a href='".$info->pdf."' target='_blank'>Click Here </a>";
				}
			else {
					$data['pdf'] = "";
				}
    	}
    	else {
				$data['pdf'] = "";
		}
		
		
			$data['subpages']= array();    
            $results = $this->model_page->getsubpages($info->id);
            if ($results) {
                foreach($results as $val){
                    if($val->image) {    
                        $thumbimage=resizeimage($val->image,600,339);
                        $image = $thumbimage;
                    }
                    else {
                        $thumbimage=resizeimage('no_image.jpg',600,339);
                        $image = $thumbimage;
						 }
                    $data['subpages'][] = array(
                        'id' => $val->id,
                        'name' => $val->name,
                        'iconasow' => $val->iconasow,
                        'shortdescription' => $val->shortdescription,  
                        'image' => $image, 
                        'href'  => base_url(). $val->linkname
                    );
                }

            }
			
			
			
			$data['allclients']= array();	
		  $results = $this->model_clients->getclients();
		  if ($results) {  
			  foreach($results as $val){
				  if($val->image) {	
					  $thumbimage=resizeimage($val->image,200,80);
					  $image = $thumbimage;
					  $bigimage = UPLOADFILE.$val->image;
				  }
				  else {
					  $thumbimage=resizeimage('no_image.jpg',200,80);
					  $image = $thumbimage;
					  $bigimage = UPLOADFILE.'no_image.jpg';
				  }
				  $data['allclients'][] = array(
					  'id' => $val->id,					
					  'home' => $val->home,
					  'name' => $val->name,
					  'image' => $image				
  
				  );
			  }
		  }
			
			
			
			 $data['homeproducts']= array();	
				$results = $this->model_product->getallproducts();
				if ($results) {
					foreach($results as $val){
						if($val->image) {	
							$thumbpdfcap=resizeimage($val->image,300,429);
							$image = $thumbpdfcap;
						}
						else {
							$thumbpdfcap=resizeimage('no_image.jpg',300,429);
							$image = $thumbpdfcap;
						}
						 $data['homeproducts'][] = array(
							'id' => $val->id,
							'name' => $val->name,
							'latest' => $val->latest,
							'price' => $val->price,
							'bookformat' => $val->bookformat,
							'home' => $val->home,
							'mrpprice' => $val->mrpprice,											
                            'linkname' => base_url('').$val->linkname,	
							'image' => $image

						);
					}
				}
			
			
			
					  $this->load->model('model_clients'); 

			
  $data['allclients']= array();	
		  $results = $this->model_clients->getclients();
		  if ($results) {  
			  foreach($results as $val){
				  if($val->image) {	
					  $thumbimage=resizeimage($val->image,200,80);
					  $image = $thumbimage;
					  $bigimage = UPLOADFILE.$val->image;
				  }
				  else {
					  $thumbimage=resizeimage('no_image.jpg',200,80);
					  $image = $thumbimage;
					  $bigimage = UPLOADFILE.'no_image.jpg';
				  }
				  $data['allclients'][] = array(
					  'id' => $val->id,					
					  'home' => $val->home,
					  'name' => $val->name,
					  'image' => $image				
  
				  );
			  }
		  }
  
  		  $this->load->model('model_news'); 
  
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
					  'id' => $val->id,
					  'name' => $val->name,
					  'subhead' => $val->subhead,
					  'date_added' => $val->date_added,
					  'shortdescription' => $val->shortdescription,
					  'image' => $image,
					  'linkname' => base_url().'blogdtails/' .$val->linkname	
  
				  );
			  }
		  }
  
			
			  
		  $this->load->model('model_setting');
		   $data['testimonials'] = array();
		  $results = $this->model_setting->gettestimonials();
		  if ($results) {  
			  foreach($results as $val){		
			  if($val->image) {
		  			$thumbpdfcap=resizeimage($val->image,100,100);
		  			$image = $thumbpdfcap;
		  		}
		  		else {
		  			$thumbpdfcap=resizeimage('no_image.png',100,100);
		  			$image = $thumbpdfcap;
		  		}			
				  $data['testimonials'][] = array(
					  'name' => $val->name,
		  			'image'             => $image,
					  'designation' => $val->designation,
					  'description' => $val->description,
					  'shortdescription' => $val->shortdescription
				  );
			  }
  
		  }
			
			 $data['fetaurebooks']= array();	
				$results = $this->model_product->getfetaurebooks();
				if ($results) {
					foreach($results as $val){
						if($val->image) {	
							$thumbpdfcap=resizeimage($val->image,300,429);
							$image = $thumbpdfcap;
						}
						else {
							$thumbpdfcap=resizeimage('no_image.jpg',300,429);
							$image = $thumbpdfcap;
						}
						 $data['fetaurebooks'][] = array(
							'id'               => $val->id,
							'name'             => $val->name,
							'feature'          => $val->feature,
							'price'            => $val->price,
							'home'             => $val->home,
							'images'           => base_url('uploads/').$val->image,
							'shortdescription' => $val->shortdescription,
							'mrpprice'         => $val->mrpprice,											
                            'linkname'         => base_url('').$val->linkname,	
							'image'            => $image

						);
					}
				}
				
				
				
				
		   $data['homeheads']= array();	
		  $results = $this->model_page->gethomeheads();
		  if ($results) {  
			  foreach($results as $val){				
				  $data['homeheads'][] = array(
					  'name'      => $val->name,
					  'id'        => $val->id,
					  'subname'   => $val->subname,
					  'iconasow'   => $val->iconasow,
					  'href'  => base_url().$val->linkname,					
					  'homelist'  => $val->homelist,		
					 
				  );
			  }
		  }
		  
				
				
				
				
				
			
		
			$this->load->view('header',$data);
			$this->load->view('page',$data);
			$this->load->view('footer');
		}
		else {
    		redirect('home');
		}
	}
}
