<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
		'text' => 'Gallery Manager',
		'href' => base_url().adminpath.'/clients'
		);
		$data['heading']="Gallery Manager";
		$this->load->model(adminpath.'/model_gallery');
		
		$data['allimages']= array();	

		//$data['allimages']= array();	
    	$results = $this->model_gallery->getimages();
		if ($results) {
			foreach($results as $val) {
				if($val->image) {	
					$thumbimage=$val->image;
					$image = "<img src='http://7spaints.com/uploads/".$thumbimage."' style='width:100px; height:100px;' title='".$val->name."'/>";
				}
				else {
					$thumbimage=resizeimage('no_image.png',100,80);
					$image = "<img src='".$thumbimage."' title='".$val->name."'/>";
				}
				$data['allimages'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'image' => $image,
					'status' => $val->status,
					'href' => base_url().adminpath.'/gallery/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/gallery/delete';
		$data['activeaction'] = base_url().adminpath.'/gallery/active';
		$data['inactiveaction'] = base_url().adminpath.'/gallery/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/gallery',$data);
		$this->load->view(adminpath.'/footer');
    }

    public function active() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_gallery');
			$this->model_gallery->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/gallery');
    }

    public function inactive() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_gallery');
			$this->model_gallery->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/gallery');
    }

    public function delete() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_gallery');
			$this->model_gallery->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/gallery');
    }

    public function add() {
	 	if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_gallery');
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
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."image/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="image/".$expdoc_file;
				$postdata['image'] =$imgname;
		 	}
			$postdata['name'] = $this->input->post('name');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_gallery->add($postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/gallery/add');
		}
		$this->getform();
    }

 	public function edit() {
	 	if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_gallery');
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
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."image/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="image/".$expdoc_file;
				$postdata['image'] =$imgname;
			 }
			$postdata['name'] = $this->input->post('name');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_gallery->edit($this->input->get('id'),$postdata,$category);
			$this->session->set_flashdata('imagenotify', 'Username and Password not Valid.');
			redirect(adminpath.'/gallery');
		}
		$this->getform();
    }

    public function getform() {
		$this->load->model(adminpath.'/model_gallery');
		$this->load->model(adminpath.'/model_category');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => 'Home',
			'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
			'text' => 'Gallery',
			'href' => base_url().adminpath.'/clients'
		);
				
		if (!$this->input->get('id')) {
			$data['breadcrumbs'][] = array(
				'text' => 'Gallery',
				'href' => '#'
			);
			$data['heading']="Add Gallery";
			$data['action'] = base_url().adminpath.'/gallery/add';
		} else {
			$data['breadcrumbs'][] = array(
				'text' => 'Edit Image',
				'href' => '#'
			);
			$data['heading']="Edit Gallery";
			$data['action'] = base_url().adminpath.'/gallery/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_gallery->getimage($this->input->get('id'));
    	}
		
		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}

    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

    	if (isset($info)) {
    		if($info->image) {	
				$thumbimage=resizeimage($info->image,100,80);
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
		$data['cancel'] = base_url().adminpath.'/clients';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/galleryform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}