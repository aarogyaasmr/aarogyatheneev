<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contactus extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Contact Us";
		$data['meta_keyword']="Aarogya the Neev | Contact Us";
		$data['meta_description']="Aarogya the Neev | Contact Us";
		$data['heading']="Contact Us ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Reach us',
		'href' => base_url().'contactus'
		);
		$data['action'] = base_url('contactus/save');
		$this->load->view('header',$data);
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}

    public function save() 
	{
	    //insert the contact form data into database
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'country' => $this->input->post('country'),
            'message' => $this->input->post('message'),
            'date_added'=> date('Y-m-d')
        );

        if ($this->db->insert('contact', $data))
        {
            // success
            $this->session->set_flashdata('msg','<div class="alert alert-success msgg">We received your message! Will get back to you shortly!!!</div>');
            redirect('contactus');
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger msgge">Oops! Some Error.  Please try again later!!!</div>');
            redirect('contactus');
        }
    }

	public function saveproject()
	{
	    //insert the contact form data into database
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'message' => $this->input->post('message'),
            'date_added' => date('Y-m-d')
        );

        if ($this->db->insert('contact', $data))
        {
            // success
            $this->session->set_flashdata('msg','<div class="alert alert-success msgg">We received your message! Will get back to you shortly!!!</div>');
            redirect($this->input->post('cur_url'));
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger msgge">Oops! Some Error.  Please try again later!!!</div>');
            redirect($this->input->post('cur_url'));
        }
    }

}