<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: text/html; charset=utf-8');
class Blog extends CI_Controller {

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
		'text' => 'Blog  Manager',
		'href' => base_url().adminpath.'/blog'
		);
		$data['heading']="Blog  Manager";
		$this->load->model(adminpath.'/model_blog');
		$data['allpages']= array();	

		$results = $this->model_blog->getblogs();
		if ($results) {  
			foreach($results as $val){
				$data['allpages'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'status' => $val->status,
					'href' => base_url().adminpath.'/blog/edit?id=' . $val->id
				);
			}
		}


		$data['allcategorys']= array();
    	$results = $this->model_blog->getcategorys(0);
		if ($results) {  
			foreach($results as $val){
				$subresults = $this->model_blog->getcategorys($val->id);
				$subcategory= array();	 
				if ($subresults) { 
					foreach($subresults as $val1){
						$subresults1 = $this->model_blog->getcategorys($val1->id);
						$subcategory1= array();	 
						if ($subresults1) { 
							foreach($subresults1 as $val2){
								$subcategory1[] = array(
									'id' => $val2->id,
									'name' => $val2->name,
									'status' => $val2->status,
									'href' => base_url().adminpath.'/blog/edit?id=' . $val2->id
								);
							}
						}

						$subcategory[] = array(
							'id' => $val1->id,
							'name' => $val1->name,
							'child' => $subcategory1,
							'status' => $val1->status,
							'href' => base_url().adminpath.'/blog/edit?id=' . $val1->id
						);
					}
				}
				$data['allcategorys'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'child' => $subcategory,
					'status' => $val->status,
					'href' => base_url().adminpath.'/blog/edit?id=' . $val->id
				);
			}
		}

		$data['deleteaction'] = base_url().adminpath.'/blog/delete';
		$data['activeaction'] = base_url().adminpath.'/blog/active';
		$data['inactiveaction'] = base_url().adminpath.'/blog/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/blog',$data);
		$this->load->view(adminpath.'/footer');

    }

    public function active() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_blog');
			$this->model_blog->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/blog');
    }

    public function inactive() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_blog');
			$this->model_blog->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/blog');
    }

    public function delete() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_blog');
			$this->model_blog->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/blog');
    }

    public function add() {
	 	if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_blog');
			$postdata = array();
			
			if($_FILES['banner']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.WEBP','.webp','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner="cms/".$expdoc_file;
				$postdata['banner'] =$banner;
		 	}

		 	if($_FILES['banner1']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.WEBP','.webp','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner1']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner1']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner1="cms/".$expdoc_file;
				$postdata['banner1'] =$banner1;
		 	}

		 	if($_FILES['banner2']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.DOCX','.GIF','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner2']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner2']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner2="cms/".$expdoc_file;
				$postdata['banner2'] =$banner2;
		 	}

			$postdata['home'] = $this->input->post('home');
			$postdata['tops'] = $this->input->post('tops');
			$postdata['bottom'] = $this->input->post('bottom');
			$postdata['name'] = $this->input->post('name');
			$postdata['subname'] = $this->input->post('subname');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			$postdata['shortdescription'] = $this->input->post('shortdescription');
			$postdata['homelist'] = $this->input->post('homelist');
			$postdata['description'] = $this->input->post('description');
			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_blog->add($postdata);
			$this->session->set_flashdata('pagenotify', 'Blog Add');
			redirect(adminpath.'/blog');
		}
		$this->getform();
		
    }	

 	public function edit() {
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_blog');
			$postdata = array();
			
			if($_FILES['banner']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.DOCX','.GIF','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner="cms/".$expdoc_file;
				$postdata['banner'] =$banner;
		 	}

		 	if($_FILES['banner1']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.DOCX','.GIF','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner1']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner1']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner1="cms/".$expdoc_file;
				$postdata['banner1'] =$banner1;
		 	}

		 	if($_FILES['banner2']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.PDF','.DOC','.DOCX','.GIF','.JPG','.JPEG','.PNG');
				$expdoc_file=$_FILES['banner2']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['banner2']['tmp_name'], DIR_IMAGE."cms/".$expdoc_file) or $error = "Not Uploaded";
				$banner2="cms/".$expdoc_file;
				$postdata['banner2'] =$banner2;
		 	}

			$postdata['home'] = $this->input->post('home');
			$postdata['tops'] = $this->input->post('tops');
			$postdata['bottom'] = $this->input->post('bottom');
			$postdata['name'] = $this->input->post('name');
			$postdata['subname'] = $this->input->post('subname');
			$postdata['linkname'] = $this->input->post('linkname');
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			$postdata['shortdescription'] = $this->input->post('shortdescription');
			$postdata['homelist'] = $this->input->post('homelist');
			$postdata['description'] = $this->input->post('description');
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';

			$this->model_blog->edit($this->input->get('id'),$postdata);
			$this->session->set_flashdata('pagenotify', 'Blog Updated');
			redirect(adminpath.'/blog');
		}
		$this->getform();
    }

    public function getform() {
		$this->load->model(adminpath.'/model_blog');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Blog  Manager',
		'href' => base_url().adminpath.'/blog'
		);
				
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Blog ',
		'href' => '#'
		);
		$data['heading']="Add Blog ";
		$data['action'] = base_url().adminpath.'/blog/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Blog ',
		'href' => '#'
		);
		$data['heading']="Edit Blog ";
		$data['action'] = base_url().adminpath.'/blog/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_blog->getblog($this->input->get('id'));
    	}

        if ($this->input->post('home')) {
      		$data['home'] = $this->input->post('home');
    	} elseif (isset($info)) {
			$data['home'] = $info->home;
		} else {
      		$data['home'] = '';
    	}
		
		 if ($this->input->post('tops')) {
      		$data['tops'] = $this->input->post('tops');
    	} elseif (isset($info)) {
			$data['tops'] = $info->tops;
		} else {
      		$data['tops'] = '';
    	}
		
		if ($this->input->post('bottom')) {
      		$data['bottom'] = $this->input->post('bottom');
    	} elseif (isset($info)) {
			$data['bottom'] = $info->bottom;
		} else {
      		$data['bottom'] = '';
    	}
		
		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}

		if ($this->input->post('subname')) {
      		$data['subname'] = $this->input->post('subname');
    	} elseif (isset($info)) {
			$data['subname'] = $info->subname;
		} else {
      		$data['subname'] = '';
    	}

		if ($this->input->post('homelist')) {
      		$data['homelist'] = $this->input->post('homelist');
    	} elseif (isset($info)) {
			$data['homelist'] = $info->homelist;
		} else {
      		$data['homelist'] = '';
    	}

    	if ($this->input->post('linkname')) {
      		$data['linkname'] = $this->input->post('linkname');
    	} elseif (isset($info)) {
			$data['linkname'] = $info->linkname;
		} else {
      		$data['linkname'] = '';
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

    	if ($this->input->post('shortdescription')) {
      		$data['shortdescription'] = $this->input->post('shortdescription');
    	} elseif (isset($info)) {
			$data['shortdescription'] = $info->shortdescription;
		} else {
      		$data['shortdescription'] = '';
    	}

    	if ($this->input->post('description')) {
      		$data['description'] = $this->input->post('description');
    	} elseif (isset($info)) {
			$data['description'] = $info->description;
		} else {
      		$data['description'] = '';
    	}

    	if (isset($info)) {
    		if($info->banner) {	
				$thumbimage=resizeimage($info->banner,100,80);
				$data['banner'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
		else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['banner'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
		else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['banner'] = "<img src='".$thumbimage."' />";
		}

		if (isset($info)) {
    		if($info->banner1) {	
				$thumbimage=resizeimage($info->banner1,100,80);
				$data['banner1'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
		else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['banner1'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
		else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['banner1'] = "<img src='".$thumbimage."' />";
		}

		if (isset($info)) {
    		if($info->banner2) {	
				$thumbimage=resizeimage($info->banner2,100,80);
				$data['banner2'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
		else {
				$thumbimage=resizeimage('no_image.png',100,80);
				$data['banner2'] = "<img src='".$thumbimage."' title='".$info->name."'/>";
			}
    	}
		else {
			$thumbimage=resizeimage('no_image.png',100,80);
			$data['banner2'] = "<img src='".$thumbimage."' />";
		}
		

    	//if (isset($info)) {
		//    		if($info->pdf) {	
		//					$data['pdf'] = "<a href='".$info->pdf."' target='_blank'>Click Here </a>";
		//				}
		//			else {
		//					$data['pdf'] = "";
		//				}
		//    	}
		//    	else {
		//				$data['pdf'] = "";
		//		}
		
		
		$data['allcategorys']= array();	
    	$results = $this->model_blog->getcategorys(0);
		if ($results) {  
			foreach($results as $val){
				$subresults = $this->model_blog->getcategorys($val->id);
				$subcategory= array();	 
				if ($subresults) { 
					foreach($subresults as $val1){

						$subresults1 = $this->model_blog->getcategorys($val1->id);
						$subcategory1= array();	 
						if ($subresults1) { 
							foreach($subresults1 as $val2){
								$subcategory1[] = array(
									'id' => $val2->id,
									'name' => $val2->name
								);
							}
						}

						$subcategory[] = array(
							'id' => $val1->id,
							'name' => $val1->name,
							'child' => $subcategory1
						);
					}
				}
				$data['allcategorys'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'child' => $subcategory
				);
			}
		}
		
		$data['cancel'] = base_url().adminpath.'/page';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/blogform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}