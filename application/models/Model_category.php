<?php
class Model_Category extends CI_Model {
	
	public function getcategorys($pid) {
		$condition = "pid =" . "'" . $pid . "' and status='1' ";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getpages($pid) {
		$condition = "pid =" . "'" . $pid . "' and tops='1'";
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where($condition);		
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function getcategory($id) {
		$condition = "id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}


	public function getkeywordcategory($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}
	

	public function getallhservicecontents() {
		$condition = "type='1'  and status='1'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}


	public function getallcservicecontents() {
		$condition = "type='2' and status='1'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function getallstservicecontents() {
		$condition = "type='3' and status='1'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}
	

	public function getresinsproductcontents() {
		$condition = "prdttype='3'  and status='1'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);			
		$query = $this->db->get();
		return $query->result();
	}


	public function getproductbyid($id) {
		$condition = "linkname =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}

	
	public function getallcategoriess() {
		$condition = " pid='6' and status='1' ";		
		$this->db->select('*');			
		$this->db->from('category');
		$this->db->where($condition);		
		$query = $this->db->get();		
		return $query->result();
	}


	public function gethomecategorys($category_id) {
        $condition = "pid ='" . $category_id . "' and home='1' and status='1'";
        $this->db->select('category.*');
        $this->db->from('category');   
        $this->db->where($condition);  
        $query = $this->db->get();
        return $query->result();
    }
	

	public function getsubcategory($category_id) {
		$condition = "pid ='" . $category_id . "' and status='1'";
		$this->db->select('category.*');
		$this->db->from('category');		
		$this->db->where($condition);		
		$query = $this->db->get();		
		return $query->result();
	}
	
}
?>