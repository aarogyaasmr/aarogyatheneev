<?php
class Model_Page extends CI_Model {
	
	public function getkeywordpage($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
	
	public function getsubpages($category_id) {
        $condition = "pid ='" . $category_id . "'";
        $this->db->select('page.*');
        $this->db->from('page');        
        $this->db->where($condition);        
        $query = $this->db->get();        
        return $query->result();
    }
	
	
		
	
	public function getwhatwedoss($id) {
		$condition = "id =" . "'" . $id . "' and status='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);		
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	public function getwhatwedosssub($id) {
		$condition = "pid =" . "'" . $id . "' and status='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);		
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function getpricing() {
		$condition = "status='1'";
		$this->db->select('*');
		$this->db->from('pricing');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getservice() {
		$condition = "status='1'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function getbottomcontents() {
		$condition = "bottom='1'  and status='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	public function gethomecontents() {
		$condition = "home='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function gethomeheads() {
		$condition = "status='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	
	
	
}
?>