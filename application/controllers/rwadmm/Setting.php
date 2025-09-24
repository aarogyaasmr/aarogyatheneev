<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
            redirect(adminpath.'/login');
        }

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_user');
			$postdata = array();
			$postdata['page_title'] = $this->input->post('page_title');
			$postdata['meta_keyword'] = $this->input->post('meta_keyword');
			$postdata['meta_description'] = $this->input->post('meta_description');
			$postdata['address'] = $this->input->post('address');
			$postdata['phone'] = $this->input->post('phone');
			$postdata['email'] = $this->input->post('email');
			$postdata['fax'] = $this->input->post('fax');
			$postdata['feaheading'] = $this->input->post('feaheading');
			$postdata['googlemap'] = $this->input->post('googlemap');
			$postdata['ctime'] = $this->input->post('ctime');
			$postdata['socialsites'] = $this->input->post('socialsites');
			$postdata['social1'] = $this->input->post('social1');
			$postdata['social2'] = $this->input->post('social2');
			$postdata['social3'] = $this->input->post('social3');
			$postdata['social4'] = $this->input->post('social4');
			$postdata['com1'] = $this->input->post('com1');
			$postdata['com2'] = $this->input->post('com2');
			$postdata['com3'] = $this->input->post('com3');
			$postdata['com4'] = $this->input->post('com4');
			$postdata['comvalue1'] = $this->input->post('comvalue1');
			$postdata['comvalue2'] = $this->input->post('comvalue2');
			$postdata['comvalue3'] = $this->input->post('comvalue3');
			$postdata['comvalue4'] = $this->input->post('comvalue4');
			$postdata['copyright'] = $this->input->post('copyright');
			$postdata['whatsappmsg'] = $this->input->post('whatsappmsg');
			$postdata['pricingtext'] = $this->input->post('pricingtext');
			$postdata['whatsappmsghome'] = $this->input->post('whatsappmsghome');
			$postdata['numbertitle1'] = $this->input->post('numbertitle1');
			$postdata['numbertitle2'] = $this->input->post('numbertitle2');
			$postdata['numbertitle3'] = $this->input->post('numbertitle3');
			$postdata['numbertitle4'] = $this->input->post('numbertitle4');
			
			/*if($_FILES['featuredimage']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.SVG','.svg');						
				$expdoc_file=$_FILES['featuredimage']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['featuredimage']['tmp_name'], DIR_IMAGE."admin/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="admin/".$expdoc_file;
				$postdata['featuredimage'] =$imgname;
		    }*/
			
			
			if($_FILES['icon']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.SVG','.svg');						
				$expdoc_file=$_FILES['icon']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['icon']['tmp_name'], DIR_IMAGE."admin/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="admin/".$expdoc_file;
				$postdata['icon'] =$imgname;
		    }
			
			
			if($_FILES['logo']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.SVG','.svg');			
				$expdoc_file=$_FILES['logo']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['logo']['tmp_name'], DIR_IMAGE."admin/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="admin/".$expdoc_file;
				$postdata['logo'] =$imgname;
		    }
			
			
		    if($_FILES['image']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.SVG','.svg');					
				$expdoc_file=$_FILES['image']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['image']['tmp_name'], DIR_IMAGE."admin/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="admin/".$expdoc_file;
				$postdata['image'] =$imgname;
		    }
			
			
		    if($_FILES['aboutimage']['name'] <>'')
		 	{
				$allowed_filetypes = array('.pdf','.doc','.docx','.gif','.jpg','.jpeg','.png','.SVG','.svg');					
				$expdoc_file=$_FILES['aboutimage']['name'];
				$expdoc_file = str_replace('','-',$expdoc_file);
				$ext = substr($expdoc_file, strpos($expdoc_file,'.'), strlen($expdoc_file)-1);
				if(!in_array($ext,$allowed_filetypes))
					die('The file you attempted to upload is not allowed.');
				$random_digit=rand(0000,9999);
				$expdoc_file=$random_digit.$expdoc_file;
				move_uploaded_file($_FILES['aboutimage']['tmp_name'], DIR_IMAGE."admin/".$expdoc_file) or $error = "Not Uploaded";
				$imgname="admin/".$expdoc_file;
				$postdata['aboutimage'] =$imgname;
		    }

			
			$this->model_user->updateprofile($postdata);
			$this->session->set_flashdata('settingnotify', 'Your profile has been successfully updated.');
			redirect(adminpath.'/setting');
		}

		$this->getform();

    }

    public function getform() {
		
		$this->load->model(adminpath.'/model_user');
			
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
				
		$data['breadcrumbs'][] = array(
		'text' => 'Setting',
		'href' => base_url().adminpath.'/setting'
		);
				
		$data['heading']="Setting";

		$data['action'] = base_url().adminpath.'/setting';


      	$info = $this->model_user->userinfo($this->session->userdata['logged_in']['username']);


    	if ($this->input->post('page_title')) {
      		$data['page_title'] = $this->input->post('page_title');
    	} elseif (isset($info)) {
			$data['page_title'] = $info[0]->page_title;
		} else {
      		$data['page_title'] = '';
    	}


    	if ($this->input->post('meta_keyword')) {
      		$data['meta_keyword'] = $this->input->post('meta_keyword');
    	} elseif (isset($info)) {
			$data['meta_keyword'] = $info[0]->meta_keyword;
		} else {
      		$data['meta_keyword'] = '';
    	}


    	if ($this->input->post('meta_description')) {
      		$data['meta_description'] = $this->input->post('meta_description');
    	} elseif (isset($info)) {
			$data['meta_description'] = $info[0]->meta_description;
		} else {
      		$data['meta_description'] = '';
    	}


    	if ($this->input->post('address')) {
      		$data['address'] = $this->input->post('address');
    	} elseif (isset($info)) {
			$data['address'] = $info[0]->address;
		} else {
      		$data['address'] = '';
    	}


    	if ($this->input->post('phone')) {
      		$data['phone'] = $this->input->post('phone');
    	} elseif (isset($info)) {
			$data['phone'] = $info[0]->phone;
		} else {
      		$data['phone'] = '';
    	}

    	if ($this->input->post('email')) {
      		$data['email'] = $this->input->post('email');
    	} elseif (isset($info)) {
			$data['email'] = $info[0]->email;
		} else {
      		$data['email'] = '';
    	}

        if ($this->input->post('ctime')) {
      		$data['ctime'] = $this->input->post('ctime');
    	} elseif (isset($info)) {
			$data['ctime'] = $info[0]->ctime;
		} else {
      		$data['ctime'] = '';
    	}

    	if ($this->input->post('fax')) {
      		$data['fax'] = $this->input->post('fax');
    	} elseif (isset($info)) {
			$data['fax'] = $info[0]->fax;
		} else {
      		$data['fax'] = '';
    	}
    	
    	if ($this->input->post('feaheading')) {
      		$data['feaheading'] = $this->input->post('feaheading');
    	} elseif (isset($info)) {
			$data['feaheading'] = $info[0]->feaheading;
		} else {
      		$data['feaheading'] = '';
    	}

    	if ($this->input->post('googlemap')) {
      		$data['googlemap'] = $this->input->post('googlemap');
    	} elseif (isset($info)) {
			$data['googlemap'] = $info[0]->googlemap;
		} else {
      		$data['googlemap'] = '';
    	}

    	if ($this->input->post('socialsites')) {
      		$data['socialsites'] = $this->input->post('socialsites');
    	} elseif (isset($info)) {
			$data['socialsites'] = $info[0]->socialsites;
		} else {
      		$data['socialsites'] = '';
    	}
		
		
		if ($this->input->post('social1')) {
      		$data['social1'] = $this->input->post('social1');
    	} elseif (isset($info)) {
			$data['social1'] = $info[0]->social1;
		} else {
      		$data['social1'] = '';
    	}
		
		
		if ($this->input->post('social2')) {
      		$data['social2'] = $this->input->post('social2');
    	} elseif (isset($info)) {
			$data['social2'] = $info[0]->social2;
		} else {
      		$data['social2'] = '';
    	}
		
		
		if ($this->input->post('social3')) {
      		$data['social3'] = $this->input->post('social3');
    	} elseif (isset($info)) {
			$data['social3'] = $info[0]->social3;
		} else {
      		$data['social3'] = '';
    	}
		
		
		if ($this->input->post('social4')) {
      		$data['social4'] = $this->input->post('social4');
    	} elseif (isset($info)) {
			$data['social4'] = $info[0]->social4;
		} else {
      		$data['social4'] = '';
    	}
		
		if ($this->input->post('com1')) {
      		$data['com1'] = $this->input->post('com1');
    	} elseif (isset($info)) {
			$data['com1'] = $info[0]->com1;
		} else {
      		$data['com1'] = '';
    	}
		
		if ($this->input->post('com2')) {
      		$data['com2'] = $this->input->post('com2');
    	} elseif (isset($info)) {
			$data['com2'] = $info[0]->com2;
		} else {
      		$data['com2'] = '';
    	}
		
		if ($this->input->post('com3')) {
      		$data['com3'] = $this->input->post('com3');
    	} elseif (isset($info)) {
			$data['com3'] = $info[0]->com3;
		} else {
      		$data['com3'] = '';
    	}
		
		if ($this->input->post('com4')) {
      		$data['com4'] = $this->input->post('com4');
    	} elseif (isset($info)) {
			$data['com4'] = $info[0]->com4;
		} else {
      		$data['com4'] = '';
    	}

    	if ($this->input->post('numbertitle1')) {
      		$data['numbertitle1'] = $this->input->post('numbertitle1');
    	} elseif (isset($info)) {
			$data['numbertitle1'] = $info[0]->numbertitle1;
		} else {
      		$data['numbertitle1'] = '';
    	}
		
    	if ($this->input->post('numbertitle2')) {
      		$data['numbertitle2'] = $this->input->post('numbertitle2');
    	} elseif (isset($info)) {
			$data['numbertitle2'] = $info[0]->numbertitle2;
		} else {
      		$data['numbertitle2'] = '';
    	}
		
    	if ($this->input->post('numbertitle3')) {
      		$data['numbertitle3'] = $this->input->post('numbertitle3');
    	} elseif (isset($info)) {
			$data['numbertitle3'] = $info[0]->numbertitle3;
		} else {
      		$data['numbertitle3'] = '';
    	}
		
		if ($this->input->post('numbertitle4')) {
      		$data['numbertitle4'] = $this->input->post('numbertitle4');
    	} elseif (isset($info)) {
			$data['numbertitle4'] = $info[0]->numbertitle4;
		} else {
      		$data['numbertitle4'] = '';
    	}
		
		if ($this->input->post('comvalue1')) {
      		$data['comvalue1'] = $this->input->post('comvalue1');
    	} elseif (isset($info)) {
			$data['comvalue1'] = $info[0]->comvalue1;
		} else {
      		$data['comvalue1'] = '';
    	}
		
		if ($this->input->post('comvalue2')) {
      		$data['comvalue2'] = $this->input->post('comvalue2');
    	} elseif (isset($info)) {
			$data['comvalue2'] = $info[0]->comvalue2;
		} else {
      		$data['comvalue2'] = '';
    	}
		
		if ($this->input->post('comvalue3')) {
      		$data['comvalue3'] = $this->input->post('comvalue3');
    	} elseif (isset($info)) {
			$data['comvalue3'] = $info[0]->comvalue3;
		} else {
      		$data['comvalue3'] = '';
    	}
		
		if ($this->input->post('comvalue4')) {
      		$data['comvalue4'] = $this->input->post('comvalue4');
    	} elseif (isset($info)) {
			$data['comvalue4'] = $info[0]->comvalue4;
		} else {
      		$data['comvalue4'] = '';
    	}
    	
		if ($this->input->post('whatsappmsg')) {
      		$data['whatsappmsg'] = $this->input->post('whatsappmsg');
    	} elseif (isset($info)) {
			$data['whatsappmsg'] = $info[0]->whatsappmsg;
		} else {
      		$data['whatsappmsg'] = '';
    	}
    	
		if ($this->input->post('whatsappmsghome')) {
      		$data['whatsappmsghome'] = $this->input->post('whatsappmsghome');
    	} elseif (isset($info)) {
			$data['whatsappmsghome'] = $info[0]->whatsappmsghome;
		} else {
      		$data['whatsappmsghome'] = '';
    	}
    	
    	if ($this->input->post('pricingtext')) {
      		$data['pricingtext'] = $this->input->post('pricingtext');
    	} elseif (isset($info)) {
			$data['pricingtext'] = $info[0]->pricingtext;
		} else {
      		$data['pricingtext'] = '';
    	}
		
		if ($this->input->post('copyright')) {
      		$data['copyright'] = $this->input->post('copyright');
    	} elseif (isset($info)) {
			$data['copyright'] = $info[0]->copyright;
		} else {
      		$data['copyright'] = '';
    	}
		
	    if ($this->input->post('icon')) {
      		$data['icon'] = $this->input->post('icon');
    	} elseif (isset($info)) {
			$data['icon'] = $info[0]->icon;
		} else {
      		$data['icon'] = '';
    	}
		
		if ($this->input->post('logo')) {
      		$data['logo'] = $this->input->post('logo');
    	} elseif (isset($info)) {
			$data['logo'] = $info[0]->logo;
		} else {
      		$data['logo'] = '';
    	}
		
		if ($this->input->post('image')) {
      		$data['image'] = $this->input->post('image');
    	} elseif (isset($info)) {
			$data['image'] = $info[0]->image;
		} else {
      		$data['image'] = '';
    	}

    	if ($this->input->post('aboutimage')) {
      		$data['aboutimage'] = $this->input->post('aboutimage');
    	} elseif (isset($info)) {
			$data['aboutimage'] = $info[0]->aboutimage;
		} else {
      		$data['aboutimage'] = '';
    	}
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/profileform',$data);
		$this->load->view(adminpath.'/footer');
				
	}
}