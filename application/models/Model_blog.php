<?php
class Model_Blog extends CI_Model {
	
	public function getallblog() {
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}
	public function getcurrentblog() {
		$condition = "tops='1'";
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	public function getbottomblogcontents() {
		$condition = "tops='1'";
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where($condition);
		$this->db->order_by("id","DESC");
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result();
	}
	public function getblog($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		    return $query->row();
		} else {
		    return false;
		}
	}
	public function getblogs() {
		$condition = "home='1'";
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->where($condition);
		$this->db->limit(4);
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}
}
?>