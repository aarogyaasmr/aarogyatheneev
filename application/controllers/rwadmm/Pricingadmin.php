<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricingadmin extends CI_Controller {

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
		'text' => 'Pricing Manager',
		'href' => base_url().adminpath.'/pricingadmin'
		);
		$data['heading']="Pricing Manager";
		$this->load->model(adminpath.'/model_pricing');
		$data['alladminpricing']= array();	
    	$results = $this->model_pricing->getadminpricings();
		if ($results) {  
			foreach($results as $val){
				$data['alladminpricing'][] = array(
					'id' => $val->id,
					'name' => $val->name,
					'pricing' => $val->pricing,
					'status' => $val->status,
					'href' => base_url().adminpath.'/pricingadmin/edit?id=' . $val->id
				);
			}
		}
		
		$data['deleteaction'] = base_url().adminpath.'/pricingadmin/delete';
		$data['activeaction'] = base_url().adminpath.'/pricingadmin/active';
		$data['inactiveaction'] = base_url().adminpath.'/pricingadmin/inactive';
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/adminpricing',$data);
		$this->load->view(adminpath.'/footer');

    }
    
    public function active() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_pricing');
			$this->model_pricing->active($_POST['table_records']);
    	}
    	redirect(adminpath.'/pricingadmin');
    }
    
    public function inactive() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_pricing');
			$this->model_pricing->inactive($_POST['table_records']);
    	}
    	redirect(adminpath.'/pricingadmin');
    }
    
    public function delete() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_pricing');
			$this->model_pricing->delete($_POST['table_records']);
    	}
    	redirect(adminpath.'/pricingadmin');
    }
    
    public function add() {
        
		 if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_pricing');
			$postdata = array();

			$postdata['name'] = $this->input->post('name');
			$postdata['best_for'] = $this->input->post('best');
			$postdata['minimum'] = $this->input->post('minimum');
			$postdata['pricing'] = $this->input->post('pricing');
			$postdata['colorclass'] = $this->input->post('colorclass');

			$postdata['date_added'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_pricing->add($postdata);
			$this->session->set_flashdata('headerbannernotify', 'Username and Password not Valid.');
			redirect(adminpath.'/pricingadmin');
		}
		
		$this->getform();
		
    }	
    
    public function edit() {
	    if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->load->model(adminpath.'/model_pricing');
			$postdata = array();
			
			$postdata['name'] = $this->input->post('name');
			$postdata['best_for'] = $this->input->post('best');
			$postdata['minimum'] = $this->input->post('minimum');
			$postdata['pricing'] = $this->input->post('pricing');
			$postdata['colorclass'] = $this->input->post('colorclass');
			
			$postdata['date_modify'] = date('Y-m-d H:i:s');
			$postdata['status'] = '1';
			$this->model_pricing->edit($this->input->get('id'),$postdata);
			$this->session->set_flashdata('headerbannernotify', 'Username and Password not Valid.');
			redirect(adminpath.'/pricingadmin');
		}
		
		$this->getform();

    }
    
    public function getform() {
		$this->load->model(adminpath.'/model_pricing');
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => '#'
		);
		$data['breadcrumbs'][] = array(
		'text' => 'Pricing Manager',
		'href' => base_url().adminpath.'/image'
		);
		if (!$this->input->get('id')) {
		$data['breadcrumbs'][] = array(
		'text' => 'Add Pricing',
		'href' => '#'
		);
		$data['heading']="Add Pricing";
		$data['action'] = base_url().adminpath.'/pricingadmin/add';
		} else {
		$data['breadcrumbs'][] = array(
		'text' => 'Edit Pricing',
		'href' => '#'
		);
		$data['heading']="Edit Pricing";
		$data['action'] = base_url().adminpath.'/pricingadmin/edit?id=' . $this->input->get('id');
		}
		
		if ($this->input->get('id') && $this->input->server('REQUEST_METHOD') != 'POST') {
      		$info = $this->model_pricing->getadminpricing($this->input->get('id'));
    	}

		if ($this->input->post('name')) {
      		$data['name'] = $this->input->post('name');
    	} elseif (isset($info)) {
			$data['name'] = $info->name;
		} else {
      		$data['name'] = '';
    	}
		
		if ($this->input->post('best')) {
      		$data['best'] = $this->input->post('best');
    	} elseif (isset($info)) {
			$data['best'] = $info->best_for;
		} else {
      		$data['best'] = '';
    	}
    	
    	if ($this->input->post('minimum')) {
      		$data['minimum'] = $this->input->post('minimum');
    	} elseif (isset($info)) {
			$data['minimum'] = $info->minimum;
		} else {
      		$data['minimum'] = '';
    	}
    	
    	if ($this->input->post('pricing')) {
      		$data['pricing'] = $this->input->post('pricing');
    	} elseif (isset($info)) {
			$data['pricing'] = $info->pricing;
		} else {
      		$data['pricing'] = '';
    	}
    	
    	if ($this->input->post('colorclass')) {
      		$data['colorclass'] = $this->input->post('colorclass');
    	} elseif (isset($info)) {
			$data['colorclass'] = $info->colorclass;
		} else {
      		$data['colorclass'] = '';
    	}
    	
    	if ($this->input->post('id')) {
      		$data['id'] = $this->input->post('id');
    	} elseif (isset($info)) {
			$data['id'] = $info->id;
		} else {
      		$data['id'] = '0';
    	}

		$data['cancel'] = base_url().adminpath.'/pricingadmin';
		
		$this->load->view(adminpath.'/header');
		$this->load->view(adminpath.'/adminpricingform',$data);
		$this->load->view(adminpath.'/footer');

	}
}