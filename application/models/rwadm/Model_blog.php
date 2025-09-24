<?php

class Model_Blog extends CI_Model {


	public function add($data)
	{
		$this->db->insert('blog', $data);
	}

	
	public function edit($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('blog',$data);
	}

	
	public function delete($data) {	
		if($data) {
			foreach($data as $id) {
				$this->db->where('id', $id);
				$this->db->delete('blog');
			}
		};
	}


	public function active($data)
	{
		if($data) {
			foreach($data as $id) {
				$postdata=array(
					'status'=>1,
				);
				$this->db->where('id', $id);
				$this->db->update('blog',$postdata);
			}
		};
	}

	
	public function inactive($data)	{

		if($data) {
			foreach($data as $id) {
				$postdata=array(
					'status'=>0,
				);
				$this->db->where('id', $id);
				$this->db->update('blog',$postdata);
				
			}
		};

	}

	
	public function getblog($id) {

		$condition = "id =" . "'" . $id . "'";

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

		$this->db->select('*');

		$this->db->from('blog');

		$query = $this->db->get();

		return $query->result();

	}


	public function getcategorys($pid) {

		$condition = "pid =" . "'" . $pid . "'";

		$this->db->select('*');

		$this->db->from('blog');

		$this->db->where($condition);

		$query = $this->db->get();

		return $query->result();

	}

}

?>