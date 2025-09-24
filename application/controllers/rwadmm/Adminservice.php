<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminservice extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        $data=array();
        $data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Service Manager',
		'href' => base_url().adminpath.'/adminservice'
		);
		$data['heading']="Service Manager";
		$this->load->model(adminpath.'/model_adminservice');
		$data['alladminservice']= array();	
    	$results = $this->model_adminservice->getadminservices();
		if ($results) {  
			foreach($results as $val) {
				if($val->icon) {
					$thumbimage=resizeimage($val->icon,100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				else {
					$thumbimage=resizeimage('no_image.png',100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				$data['alladminservice'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'image' => $image,
					'status' => $val->status,
					'href' => base_url().adminpath.'/adminservice/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/adminservice/delete';
		$data['activeaction'] = base_url().adminpath.'/adminservice/active';
		$data['inactiveaction'] = base_url().adminpath.'/adminservice/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/adminservice',$data);
		$this->load->view(adminpath.'/footer');

    }
    
    public function active() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_adminservice');
			$this->model_adminservice->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/adminservice');
    }
    
    public function inactive() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_adminservice');
			$this->model_adminservice->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/adminservice');
    }
    
    public function delete() {
    	//echo "ok"; exit;
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_adminservice');
			// echo $_POST['table_records']; exit;
			$this->model_adminservice->delete($_POST['table_records']);
    	} else {
    		echo "error";
    	}
    	redirect(adminpath.'/adminservice');
    }
    
    public function add() {        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_adminservice');
			$postdata = array();
			if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.jpg','.jpeg','.png','.webp');			
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."serviceicon/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="serviceicon/".$expdoc_file;
				$postdata['icon'] =$imgname;
		    }
		    if($_FILES['imagesec']['name'] <>'')
		 	{
				$allowed_filetypes = array('.jpg','.jpeg','.png','.webp');			
				$expdoc_file=$_FILES['imagesec']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['imagesec']['tmp_name'], DIR_IMAGE."serviceicon/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="serviceicon/".$expdoc_file;
				$postdata['imagesec'] =$imgname;
		    }
			$postdata['type'] = $this->input->post('type');
			$postdata['name'] = $this->input->post('name');
			$postdata['home'] = $this->input->post('home');
			$postdata['description'] = $this->input->post('text');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['shortdescription'] = $this->input->post('stext');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');

			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_adminservice->add($postdata);
			$this->session->set_flashdata('headerbannernotify', 'Added');
			redirect(adminpath.'/adminservice');
		}
		
		$this->getform();
		
    }	
    
    public function edit() {
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_adminservice');
			$postdata = array();
			
			if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.webp');			
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."serviceicon/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="serviceicon/".$expdoc_file;
				$postdata['icon'] =$imgname;
		    }
		    if($_FILES['imagesec']['name'] <>'')
		 	{
				$allowed_filetypes = array('.jpg','.jpeg','.png','.webp');			
				$expdoc_file=$_FILES['imagesec']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['imagesec']['tmp_name'], DIR_IMAGE."serviceicon/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="serviceicon/".$expdoc_file;
				$postdata['imagesec'] =$imgname;
		    }
			$postdata['type'] = $this->input->post('type');
			$postdata['home'] = $this->input->post('home');
			$postdata['name'] = $this->input->post('name');
			$postdata['description'] = $this->input->post('text');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['shortdescription'] = $this->input->post('stext');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_adminservice->edit($this->input->get('id'),$postdata);
			$this->session->set_flashdata('headerbannernotify', 'Username and Password not Valid.');
			redirect(adminpath.'/adminservice');
		}
		
		$this->getform();

    }
    
    public function getform() {
		$this->load->model(adminpath.'/model_adminservice');
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
		$data['breadcrumbs'][] = array(
		'text' => 'Service Manager',
		'href' => base_url().adminpath.'/image'
		);
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Service',
		'href' => '#'
		);
		$data['heading']="Add Service";
		$data['action'] = base_url().adminpath.'/adminservice/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Service',
		'href' => '#'
		);
		$data['heading']="Edit Service";
		$data['action'] = base_url().adminpath.'/adminservice/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_adminservice->getadminservice($this->input->get('id'));
    	}

		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
		
		if ($this->input->post('linkname')) {
      		$data['linkname'] = $this->input->post('linkname');
    	} elseif (isset($info)) {
			$data['linkname'] = $info->linkname;
		} else {
      		$data['linkname'] = '';
    	}

    	if ($this->input->post('text')) {
      		$data['text'] = $this->input->post('text');
    	} elseif (isset($info)) {
			$data['text'] = $info->description;
		} else {
      		$data['text'] = '';
    	}

		if ($this->input->post('stext')) {
      		$data['stext'] = $this->input->post('stext');
    	} elseif (isset($info)) {
			$data['stext'] = $info->shortdescription;
		} else {
      		$data['stext'] = '';
    	}
    	
    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

    	if ($this->input->post('page_title')) {
      		$data['page_title'] = $this->input->post('page_title');
    	} elseif (isset($info)) {
			$data['page_title'] = $info->page_title;
		} else {
      		$data['page_title'] = '';
    	}

    	if ($this->input->post('meta_keyword')) {
      		$data['meta_keyword'] = $this->input->post('meta_keyword');
    	} elseif (isset($info)) {
			$data['meta_keyword'] = $info->meta_keyword;
		} else {
      		$data['meta_keyword'] = '';
    	}

    	if ($this->input->post('meta_description')) {
      		$data['meta_description'] = $this->input->post('meta_description');
    	} elseif (isset($info)) {
			$data['meta_description'] = $info->meta_description;
		} else {
      		$data['meta_description'] = '';
    	}

    	if (isset($info)) {
    		if($info->icon) {	
				$thumbimage=resizeimage($info->icon,100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
			else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
    	else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['image'] = "<img src='".$thumbimage."'/>";
		}

		if (isset($info)) {
    		if($info->imagesec) {	
				$thumbimage=resizeimage($info->imagesec,100,80);
				$data['imagesec'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
			else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['imagesec'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
    	else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['imagesec'] = "<img src='".$thumbimage."'/>";
		}
		
		$data['cancel'] = base_url().adminpath.'/adminservice';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/adminserviceform',$data);
		$this->load->view(adminpath.'/footer');

	}
}