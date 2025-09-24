<?php
class Model_event extends CI_Model {
	
	public function getallnews() {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->order_by("orderno","ASC");	
		$query = $this->db->get();
		return $query->result();
	}
	public function getnews($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
	
		public function getevents() {
		$condition = "home='1'";
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where($condition);
		$this->db->limit(3);
		$this->db->order_by("orderno","ASC");	
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	
	
}
?>