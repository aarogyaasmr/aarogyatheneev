<?php
class Model_Product extends CI_Model {
	
	    public function getallproducts() {
		$condition = "latest='1' and status='1'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	public function getfetaurebooks() {
		$condition = "feature='1' and status='1'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function gethauthorbooks() {
		$condition = "home='1' and status='1'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	
    public function getproductimages($id) {
		$condition = "product_id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('productimage');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
	
	
	public function getotherproduct($id,$sid) {
		$condition = "type =" . "'" . $id . "' and id!='$sid'";
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}

		
	public function getproductbyid($id) {
		$condition = "id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
		
	public function getproduct($keyword) {
		$condition = "linkname =" . "'" . $keyword . "'";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}

	public function getkeywordproduct($keyword) {
			$condition = "linkname =" . "'" . $keyword . "'";
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->row();
			} else {
			return false;
			}
	}
	public function getproductcategory($category_id) {
		$condition = "product_category.category_id ='" . $category_id . "'";
		$this->db->select('product.*');
		$this->db->from('product');
		$this->db->join('product_category', 'product_category.product_id = product.id','left');
		$this->db->where($condition);
		$this->db->order_by("id","asc");
		$query = $this->db->get();
		//$this->db->last_query();
		return $query->result();
	}
	
	
	public function gethomeproductcategory($category_id) {
		$condition = "product_category.category_id ='" . $category_id . "' ";
		$this->db->select('product.*');
		$this->db->from('product');
		$this->db->join('product_category', 'product_category.product_id = product.id','left');
		$this->db->where($condition);
		$this->db->order_by("id","asc");
		$this->db->limit(6);
		$query = $this->db->get();
		//$this->db->last_query();
		return $query->result();
	}
	
	
	
	
	
	
	
	
	
}
?>