<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutadmin extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_aboutadmin');
			$postdata = array();
			
			if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."image/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="image/".$expdoc_file;
				$postdata['aboutimg'] =$imgname;
		    }
		    
			$postdata['aboutheading'] = $this->input->post('aboutheading');
			$postdata['abouttext'] = $this->input->post('abouttext');
			$postdata['aboutvision'] = $this->input->post('aboutvision');
			$postdata['aboutmission'] = $this->input->post('aboutmission');
			$postdata['brandbelief'] = $this->input->post('brandbelief');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			
			$this->model_aboutadmin->updateabout($postdata);
			$this->session->set_flashdata('settingnotify', 'Your about has been successfully updated.');
			redirect(adminpath.'/aboutadmin');
		}

		$this->getform();

    }

    public function getform() {

		$this->load->model(adminpath.'/model_aboutadmin');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => 'Home',
			'href' => '#'
		);

		$data['breadcrumbs'][] = array(
			'text' => 'About',
			'href' => base_url().adminpath.'/aboutadmin'
		);

		$data['heading']="About Website";

		$data['action'] = base_url().adminpath.'/aboutadmin';

      	$info = $this->model_aboutadmin->aboutinfo();

    	if ($this->input->post('aboutheading')) {
      		$data['aboutheading'] = $this->input->post('aboutheading');
    	} elseif (isset($info)) {
			$data['aboutheading'] = $info[0]->aboutheading;
		} else {
      		$data['aboutheading'] = '';
    	}
    	if ($this->input->post('abouttext')) {
      		$data['abouttext'] = $this->input->post('abouttext');
    	} elseif (isset($info)) {
			$data['abouttext'] = $info[0]->abouttext;
		} else {
      		$data['abouttext'] = '';
    	}
    	if ($this->input->post('aboutvision')) {
      		$data['aboutvision'] = $this->input->post('aboutvision');
    	} elseif (isset($info)) {
			$data['aboutvision'] = $info[0]->aboutvision;
		} else {
      		$data['aboutvision'] = '';
    	}
    	if ($this->input->post('aboutmission')) {
      		$data['aboutmission'] = $this->input->post('aboutmission');
    	} elseif (isset($info)) {
			$data['aboutmission'] = $info[0]->aboutmission;
		} else {
      		$data['aboutmission'] = '';
    	}
    	if ($this->input->post('brandbelief')) {
      		$data['brandbelief'] = $this->input->post('brandbelief');
    	} elseif (isset($info)) {
			$data['brandbelief'] = $info[0]->brandbelief;
		} else {
      		$data['brandbelief'] = '';
    	}
    	if ($this->input->post('page_title')) {
      		$data['page_title'] = $this->input->post('page_title');
    	} elseif (isset($info)) {
			$data['page_title'] = $info[0]->page_title;
		} else {
      		$data['page_title'] = '';
    	}if ($this->input->post('meta_keyword')) {
      		$data['meta_keyword'] = $this->input->post('meta_keyword');
    	} elseif (isset($info)) {
			$data['meta_keyword'] = $info[0]->meta_keyword;
		} else {
      		$data['meta_keyword'] = '';
    	}if ($this->input->post('meta_description')) {
      		$data['meta_description'] = $this->input->post('meta_description');
    	} elseif (isset($info)) {
			$data['meta_description'] = $info[0]->meta_description;
		} else {
      		$data['meta_description'] = '';
    	}
    	if (isset($info[0])) {
    		if($info[0]->aboutimg) {	
				$thumbimage=resizeimage($info[0]->aboutimg,100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info[0]->aboutimg."'/>";
			}
			else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info[0]->aboutimg."'/>";
			}
    	}
    	else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['image'] = "<img src='".$thumbimage."'/>";
		}
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/aboutadmin',$data);
		$this->load->view(adminpath.'/footer');

	}
}