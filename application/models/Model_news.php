<?php
class Model_News extends CI_Model {
	
	public function getallnews() {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}
	public function getnews($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
	
		public function getnewss() {
		$condition = "home='1'";
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where($condition);
		$this->db->limit(4);
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	
	
}
?>