<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Appointment extends CI_Controller {
	public function index()
	{
		$data=array();
		$data['page_title']="Aarogya the Neev | Book A Demo";
		$data['meta_keyword']="Aarogya the Neev | Book A Demo";
		$data['meta_description']="Aarogya the Neev | Book A Demo";
		$data['heading']="Book A Demo ";
		$data['breadcrumbs'][] = array(
		'text' => 'Home',
		'href' => base_url()
		);

		$data['breadcrumbs'][] = array(
		'text' => 'Reach us',
		'href' => base_url().'appointment'
		);
		$data['action'] = base_url('appointment/save');
		$this->load->view('header',$data);
		$this->load->view('appointment',$data);
		$this->load->view('footer');
	}

    public function save() 
	{
	    //insert the contact form data into database
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'adate' => $this->input->post('adate'),
            'atime' => $this->input->post('atime'),
            'message' => $this->input->post('message'),
            'date_added'=> date('Y-m-d')
        );
        
        $datadetail = array(
            'appointment_date' => $this->input->post('adate'),
            'appointment_time' => $this->input->post('atime')
        );

        if ($this->db->insert('appointment', $data, $datadetail))
        {
            // success
            $this->session->set_flashdata('msg','<div class="alert alert-success msgg">Your demo with Bhumika is booked on '.$this->input->post('adate').' at '.$this->input->post('atime').'. Please availble at this time. Thank you for choosing our services! </div>');
            redirect('appointment');
        }
        else
        {
            // error
            $this->session->set_flashdata('msg','<div class="alert alert-danger msgge">Oops! Some Error.  Please try again later!!!</div>');
            redirect('appointment');
        }
    }

}