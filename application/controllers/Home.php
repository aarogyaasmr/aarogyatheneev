<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller {
        public function index()
	    {
		    $this->load->model('model_setting');
            $this->load->model('model_blog');

    	    $data = array();

            //$data['bannerinfo'] = $this->model_setting->headerbanner();

            $data['bannerhome'] = array();
            $results = $this->model_setting->getheaderbanners();
            if ($results) {
                foreach($results as $val) {
                    if($val->banner1image) {
                        //$thumbpdfcap=resizeimage($val->image,100,100);
                        $image = UPLOADFILE.$val->banner1image;
                    }
                    else {
                        $thumbpdfcap=resizeimage('no_image.jpg',100,100);
                        $image = $thumbpdfcap;
                    }
                    $data['bannerhome'][] = array(
                        'name'             => $val->banner1name,
                        'text'             => $val->banner1text,
                        'image'            => $image,
                        'link'             => $val->banner1link,
                        'button'           => $val->banner1button
                    );
                }
            }

    	    //$data = array();
    	    //$data['timelineinfo'] = $this->model_setting->timelinedataget();

            $data['servicehome'] = array();
            $results = $this->model_setting->getservicehome();
            if ($results) {
                foreach($results as $val){
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
                    $data['servicehome'][] = array(
                        'name'             => $val->name,
                        'image'            => $image,
                        'style'            => $style,
                        'shortdescription' => substr($val->shortdescription,0,120),
                        'linkname'      => $val->linkname
                    );
                }
            }

            $data['servicehomec'] = array();
            $results = $this->model_setting->getservicehomec();
            if ($results) {
                foreach($results as $val){
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
                    $data['servicehomec'][] = array(
                        'name'             => $val->name,
                        'image'            => $image,
                        'style'            => $style,
                        'shortdescription' => substr($val->shortdescription,0,120),
                        'linkname'      => $val->linkname
                    );
                }
            }

            $data['clientshome'] = array();
            $results = $this->model_setting->getclienthome();
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
                    $data['clientshome'][] = array(
                        'name'             => $val->name,
                        'image'            => $image
                    );
                }
            }

            $data['teamhome'] = array();
            $results = $this->model_setting->getteamhome();
            if ($results) {
                foreach($results as $val) {
                    if($val->image) {
                        $thumbpdfcap=UPLOADFILE.$val->image;
                        $image = $thumbpdfcap;
                    }
                    else {
                        $thumbpdfcap=resizeimage('no_image.jpg',100,100);
                        $image = $thumbpdfcap;
                    }
                    $data['teamhome'][] = array(
                        'name'             => $val->name,
                        'designation'      => $val->designation,
                        'shortdescription' => $val->shortdescription,
                        'image'            => $image
                    );
                }
            }

    	    //$this->load->model('model_setting');
    	    $data['testimonialshome'] = array();
    	    $results = $this->model_setting->gettestimonialshome();
            if ($results) {
    	  	    foreach($results as $val) {
    		  		if($val->image) {
    		  			$thumbpdfcap=resizeimage($val->image,100,100);
    		  			$image = $thumbpdfcap;
    		  		}
    		  		else {
    		  			$thumbpdfcap=resizeimage('no_image.jpg',100,100);
    		  			$image = $thumbpdfcap;
    		  		}
    		  		$data['testimonialshome'][] = array(
    		  			'name'             => $val->name,
    		  			'image'            => $image,
    		  			'designation'      => $val->designation,
    		  			'shortdescription' => $val->shortdescription
    		  		);
      	        }
            }
            
            //$this->load->model('model_setting');
    	    $data['feedbackshome'] = array();
    	    $results = $this->model_setting->getfeedbackhome();
            if ($results) {
    	  	    foreach($results as $val) {
    		  		if($val->image) {
    		  			$thumbpdfcap=resizeimage($val->image,100,100);
    		  			$image = $thumbpdfcap;
    		  		}
    		  		else {
    		  			$thumbpdfcap=resizeimage('no_image.jpg',100,100);
    		  			$image = $thumbpdfcap;
    		  		}
    		  		$data['feedbackshome'][] = array(
    		  			'name'             => $val->name,
    		  			'image'            => $image,
    		  			'designation'      => $val->designation,
    		  			'shortdescription' => $val->shortdescription
    		  		);
      	        }
            }

            $data['videoshome'] = array();
            $results = $this->model_setting->getvideohome();
            if ($results) {
                foreach($results as $val) {
                    $data['videoshome'][] = array(
                        'name'             => $val->name,
                        'videourl'         => $val->videourl
                    );
                }
            }

            $data['serviceblog'] = array();
            $results = $this->model_blog->getallblog();
            if ($results) {
                foreach($results as $val) {
                    if($val->banner) {
                        //$thumbpdfcap=resizeimage($val->homeimage,100,100);
                        $image = UPLOADFILE.$val->banner;
                    }
                    else {
                        $thumbpdfcap=resizeimage('no_image.png',100,100);
                        $image = $thumbpdfcap;
                    }
                    $data['serviceblog'][] = array(
                        'id' => $val->id,
                        'name' => $val->name,
                        'date_added' => $val->date_added,
                        'shortdescription' => $val->shortdescription,
                        'startdate' => $val->date_added,
                        'image' => $image,
                        'href' => base_url().'blog/' . $val->linkname
                    );
                }
            }

            $data['page_title']=webdata()->page_title;
            $data['meta_keyword']=webdata()->meta_keyword;
            $data['meta_description']=webdata()->meta_description;
            $this->load->view('header',$data);
            $this->load->view('home',$data);
            $this->load->view('footer');
  
	    }
  
    }