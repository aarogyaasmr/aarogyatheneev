<?php
class Model_Setting extends CI_Model {
	
    public function getheaderbanners() {
		$this->db->select('*');
		$this->db->from('headerbanner');
		$query = $this->db->get();
		return $query->result();
	}	

	public function addeventdetail($data)
	{
		$this->db->insert('eventformdetail', $data);
		return $this->db->insert_id();
	}
	
	public function savetransactionid($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('eventformdetail',$data);
	}
	
	public function getclienthome() {
		$this->db->select('*');
		$this->db->from('clients');
		//$this->db->LIMIT('4');
// 		$this->db->where('home', 1);
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}

	public function getteamhome() {
		$this->db->select('*');
		$this->db->from('team');
		//$this->db->LIMIT('4');
		$this->db->where('home', 1);
		$this->db->order_by("id","ASC");	
		$query = $this->db->get();
		return $query->result();
	}

	public function getvideohome() {
		$this->db->select('*');
		$this->db->from('videogallery');
		//$this->db->LIMIT('4');
		$this->db->where('home', 1);
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}

	public function gettestimonialshome() {
		$this->db->select('*');
		$this->db->from('testimonials');
		//$this->db->LIMIT('4');
		$this->db->where('home', 1);
		$this->db->where('ttype', 1);
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getfeedbackhome() {
		$this->db->select('*');
		$this->db->from('testimonials');
		//$this->db->LIMIT('4');
		$this->db->where('home', 1);
		$this->db->where('ttype', 2);
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}
	
	public function gettestimonials() {
		$this->db->select('*');
		$this->db->from('testimonials');
		//$this->db->LIMIT('4');
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getservicehome() {
		$this->db->select('*');
		$this->db->from('category');
		//$this->db->LIMIT('4');
		$this->db->where('type', 1);
		$this->db->order_by("id","ASC");
		$query = $this->db->get();
		return $query->result();
	}

	public function getservicehomec() {
		$this->db->select('*');
		$this->db->from('category');
		//$this->db->LIMIT('4');
		$this->db->where('type', 2);
		$this->db->order_by("id","ASC");
		$query = $this->db->get();
		return $query->result();
	}
	
	public function headerbanner() {
		$this->db->select('*');
		$this->db->from('headerbanner');
		$this->db->where('status', '1');
		//$this->db->LIMIT('1');
		$this->db->order_by("id","DESC");		
		$query = $this->db->get();
		return $query->row();
	}
	
	public function timelinedataget() {
		$this->db->select('*');
		$this->db->from('webtimeline');
		$this->db->where('status', '1');
		//$this->db->LIMIT('1');
		$this->db->order_by("id","DESC");		
		$query = $this->db->get();
		return $query->row();
	}
	
	public function aboutuspage() {
		$this->db->select('*');
		$this->db->from('aboutwebsite');
		//$this->db->where('status', '1');
		//$this->db->LIMIT('1');
		//$this->db->order_by("id","DESC");		
		$query = $this->db->get();
		return $query->row();
	}
	
	public function getwebsiteinfo() {
		$this->db->select('*');
		$this->db->from('user');		
		$query = $this->db->get();
		return $query->row();
	}

	public function gethomepagegallerys() {
		$this->db->select('*');
		$this->db->from('image');
		$this->db->LIMIT('4');
		$this->db->order_by("id","DESC");		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function gethometeams() {
		$this->db->select('*');
		$this->db->from('team');
		//$this->db->LIMIT('4');
		//$this->db->order_by("id","DESC");		
		$query = $this->db->get();
		return $query->result();
	}

	public function getjobs() {
		$this->db->select('*');
		$this->db->from('career');
		//$this->db->LIMIT('4');
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}

	public function getcertificate() {
		$this->db->select('*');
		$this->db->from('certificate');
		//$this->db->LIMIT('4');
		$this->db->order_by("id","DESC");	
		$query = $this->db->get();
		return $query->result();
	}
	
}
?>