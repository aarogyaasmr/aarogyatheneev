<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Category extends CI_Controller {



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

		'text' => 'Category Manager',

		'href' => base_url().adminpath.'/category'

		);

		$data['heading']="Category Manager";

		$this->load->model(adminpath.'/model_category');



		$data['allcategorys']= array();	

    	$results = $this->model_category->getcategorys(0);

		if ($results) {  

			foreach($results as $val){

				$subresults = $this->model_category->getcategorys($val->id);

				$subcategory= array();	 

				if ($subresults) { 

					foreach($subresults as $val1){



						$subresults1 = $this->model_category->getcategorys($val1->id);

						$subcategory1= array();	 

						if ($subresults1) { 

							foreach($subresults1 as $val2){

								$subcategory1[] = array(

									'id' => $val2->id,

									'name' => $val2->name,

									'status' => $val2->status,

									'href' => base_url().adminpath.'/category/edit?id=' . $val2->id

								);

							}

						}



						$subcategory[] = array(

							'id' => $val1->id,

							'name' => $val1->name,

							'child' => $subcategory1,

							'status' => $val1->status,

							'href' => base_url().adminpath.'/category/edit?id=' . $val1->id

						);

					}

				}

				$data['allcategorys'][] = array(

					'id' => $val->id,

					'name' => $val->name,

					'child' => $subcategory,

					'status' => $val->status,

					'href' => base_url().adminpath.'/category/edit?id=' . $val->id

				);

			}

		}

		

		$data['deleteaction'] = base_url().adminpath.'/category/delete';

		$data['activeaction'] = base_url().adminpath.'/category/active';

		$data['inactiveaction'] = base_url().adminpath.'/category/inactive';

		$this->load->view(adminpath.'/header');

		$this->load->view(adminpath.'/category',$data);

		$this->load->view(adminpath.'/footer');



    }

    public function active(){



		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_category');

			$this->model_category->active($_POST['table_records']);

    	}

    	redirect(adminpath.'/category');

    }

    public function inactive(){



		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_category');

			$this->model_category->inactive($_POST['table_records']);

    	}

    	redirect(adminpath.'/category');

    }

    public function delete(){



		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_category');

			$this->model_category->delete($_POST['table_records']);

    	}

    	redirect(adminpath.'/category');

    }

    public function add() {

        

		 if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_category');

			$postdata = array();
			
			if($_FILES['icon']['name'] <>'')

		 	{

				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			

				$expdoc_file=$_FILES['icon']['name'];

				$expdoc_file = str_replace('','-',$expdoc_file);

				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);

				if(!in_array($ext,$allowed_filetypes))

					die('The file you attempted to upload is not allowed.');

				$random_digit=rand(0000,9999);

				$expdoc_file=$random_digit.$expdoc_file;

				move_uploaded_file($_FILES['icon']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['icon'] =$imgname;

			 }
			
			
			
			
			
			
			

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

				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['image'] =$imgname;

			 }

			 

			 		if($_FILES['banner']['name'] <>'')

		 	{

				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			

				$expdoc_file=$_FILES['banner']['name'];

				$expdoc_file = str_replace('','-',$expdoc_file);

				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);

				if(!in_array($ext,$allowed_filetypes))

					die('The file you attempted to upload is not allowed.');

				$random_digit=rand(0000,9999);

				$expdoc_file=$random_digit.$expdoc_file;

				move_uploaded_file($_FILES['banner']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['banner'] =$imgname;

			 }

			 

			 

			 

			 

			$postdata['pid'] = $this->input->post('pid');

			$postdata['name'] = $this->input->post('name');
			
			$postdata['top'] = $this->input->post('top');

			$postdata['home'] = $this->input->post('home');

			$postdata['subname'] = $this->input->post('subname');

			$postdata['linkname'] = $this->input->post('linkname');

			$postdata['page_title'] = $this->input->post('page_title');

			$postdata['meta_keyword'] = $this->input->post('meta_keyword');

			$postdata['meta_description'] = $this->input->post('meta_description');

			$postdata['shortdescription'] = $this->input->post('shortdescription');

			$postdata['description'] = $this->input->post('description');

			$postdata['homelist'] = $this->input->post('homelist');

			$postdata['date_added'] = date('Y-m-d H:i:s');

			$postdata['status'] = '1';

			$this->model_category->add($postdata);

			$this->session->set_flashdata('categorynotify', 'Username and Password not Valid.');

			redirect(adminpath.'/category');

		}

		$this->getform();

		

    }	

     public function edit() {

        

		 if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$this->load->model(adminpath.'/model_category');

			$postdata = array();
			
			
			if($_FILES['icon']['name'] <>'')

		 	{

				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			

				$expdoc_file=$_FILES['icon']['name'];

				$expdoc_file = str_replace('','-',$expdoc_file);

				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);

				if(!in_array($ext,$allowed_filetypes))

					die('The file you attempted to upload is not allowed.');

				$random_digit=rand(0000,9999);

				$expdoc_file=$random_digit.$expdoc_file;

				move_uploaded_file($_FILES['icon']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['icon'] =$imgname;

			 }
			
			
			
			
			
			

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

				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['image'] =$imgname;

			 }

			 

			 

			 

			 			if($_FILES['banner']['name'] <>'')

		 	{

				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png');			

				$expdoc_file=$_FILES['banner']['name'];

				$expdoc_file = str_replace('','-',$expdoc_file);

				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);

				if(!in_array($ext,$allowed_filetypes))

					die('The file you attempted to upload is not allowed.');

				$random_digit=rand(0000,9999);

				$expdoc_file=$random_digit.$expdoc_file;

				move_uploaded_file($_FILES['banner']['tmp_name'], DIR_IMAGE."category/".$expdoc_file) or $error = "Not Uploaded";

				$imgname="category/".$expdoc_file;

				$postdata['banner'] =$imgname;

			 }

			 

			 

			$postdata['pid'] = $this->input->post('pid');

			$postdata['name'] = $this->input->post('name');
			
			$postdata['top'] = $this->input->post('top');

			$postdata['home'] = $this->input->post('home');

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

			$this->model_category->edit($this->input->get('id'),$postdata);

			$this->session->set_flashdata('categorynotify', 'Username and Password not Valid.');

			redirect(adminpath.'/category');

		}

		$this->getform();

		

    }	

    public function getform() {

		

		$this->load->model(adminpath.'/model_category');

			

		$data['breadcrumbs'] = array();



		$data['breadcrumbs'][] = array(

		'text' => 'Home',

		'href' => '#'

		);

				

		$data['breadcrumbs'][] = array(

		'text' => 'Category Manager',

		'href' => base_url().adminpath.'/category'

		);

				

		if (!$this->input->get('id')) {

		$data['breadcrumbs'][] = array(

		'text' => 'Add Category',

		'href' => '#'

		);

		$data['heading']="Add Category";

		$data['action'] = base_url().adminpath.'/category/add';

		} else {

		$data['breadcrumbs'][] = array(

		'text' => 'Edit Category',

		'href' => '#'

		);

		$data['heading']="Edit Category";

		$data['action'] = base_url().adminpath.'/category/edit?id=' . $this->input->get('id');

		}

		

		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {

      		$info = $this->model_category->getcategory($this->input->get('id'));

    	}



		if ($this->input->post('name')) {

      		$data['name'] = $this->input->post('name');

    	} elseif (isset($info)) {

			$data['name'] = $info->name;

		} else {

      		$data['name'] = '';

    	}

		

		     if ($this->input->post('home')) {

      		$data['home'] = $this->input->post('home');

    	} elseif (isset($info)) {

			$data['home'] = $info->home;

		} else {

      		$data['home'] = '';

    	}
         if ($this->input->post('top')) {

      		$data['top'] = $this->input->post('top');

    	} elseif (isset($info)) {

			$data['top'] = $info->top;

		} else {

      		$data['top'] = '';

    	}

		

		if ($this->input->post('subname')) {

      		$data['subname'] = $this->input->post('subname');

    	} elseif (isset($info)) {

			$data['subname'] = $info->subname;

		} else {

      		$data['subname'] = '';

    	}



    	if ($this->input->post('pid')) {

      		$data['pid'] = $this->input->post('pid');

    	} elseif (isset($info)) {

			$data['pid'] = $info->pid;

		} else {

      		$data['pid'] = '';

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





		if ($this->input->post('homelist')) {

      		$data['homelist'] = $this->input->post('homelist');

    	} elseif (isset($info)) {

			$data['homelist'] = $info->homelist;

		} else {

      		$data['homelist'] = '';

    	}





if (isset($info)) {

    		if($info->icon) {	

					$thumbicon=resizeimage($info->icon,100,80);

					$data['icon'] = "<img src='".$thumbicon."' title='".$info->name."'/>";

				}

			else {

					$thumbicon=resizeimage('no_image.jpg',100,80);

					$data['icon'] = "<img src='".$thumbicon."' title='".$info->name."'/>";

				}

    	}

		else {

					$thumbicon=resizeimage('no_image.jpg',100,80);

					$data['icon'] = "<img src='".$thumbicon."'/>";

			}




    	if (isset($info)) {

    		if($info->image) {	

					$thumbimage=resizeimage($info->image,100,80);

					$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";

				}

			else {

					$thumbimage=resizeimage('no_image.jpg',100,80);

					$data['image'] = "<img src='".$thumbimage."' title='".$info->name."'/>";

				}

    	}

		else {

					$thumbimage=resizeimage('no_image.jpg',100,80);

					$data['image'] = "<img src='".$thumbimage."'/>";

			}














			

				if (isset($info)) {

    		if($info->banner) {	

					$thumbbanner=resizeimage($info->banner,100,80);

					$data['banner'] = "<img src='".$thumbbanner."' title='".$info->name."'/>";

				}

			else {

					$thumbbanner=resizeimage('no_image.jpg',100,80);

					$data['banner'] = "<img src='".$thumbbanner."' title='".$info->name."'/>";

				}

    	}

		else {

					$thumbbanner=resizeimage('no_image.jpg',100,80);

					$data['banner'] = "<img src='".$thumbbanner."'/>";

			}

			



    	if ($this->input->post('description')) {

      		$data['description'] = $this->input->post('description');

    	} elseif (isset($info)) {

			$data['description'] = $info->description;

		} else {

      		$data['description'] = '';

    	}

    	$data['allcategorys']= array();	

    	$results = $this->model_category->getcategorys(0);

		if ($results) {  

			foreach($results as $val){

				$subresults = $this->model_category->getcategorys($val->id);

				$subcategory= array();	 

				if ($subresults) { 

					foreach($subresults as $val1){



						$subresults1 = $this->model_category->getcategorys($val1->id);

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



		$data['cancel'] = base_url().adminpath.'/category';

		

		$this->load->view(adminpath.'/header');

		$this->load->view(adminpath.'/categoryform',$data);

		$this->load->view(adminpath.'/footer');

				

	}

}