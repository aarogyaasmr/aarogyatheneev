<?php

class Model_Newsletter extends CI_Model {

	

public function add($data)

	{

		$this->db->insert('newsletter', $data);

	}

public function edit($id,$data)

	{

		$this->db->where('id',$id);

		$this->db->update('newsletter',$data);

	}

public function delete($data)

	{

		if($data){
			foreach($data as $id){
				$this->db->where('id', $id);
				$this->db->delete('newsletter');
			}
		};
		

	}



public function active($data)

	{

		if($data){
			foreach($data as $id){
				$postdata=array(
					'status'=>1,
				);
				$this->db->where('id', $id);
				$this->db->update('newsletter',$postdata);
				
			}
		};

	}

public function inactive($data)

	{

		if($data){
			foreach($data as $id){
				$postdata=array(
					'status'=>0,
				);
				$this->db->where('id', $id);
				$this->db->update('newsletter',$postdata);
				
			}
		};

	}

public function getheaderbanner($id) {

		$condition = "id =" . "'" . $id . "'";

		$this->db->select('*');

		$this->db->from('newsletter');

		$this->db->where($condition);

		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {

		return $query->row();

		} else {

		return false;

		}

	}

public function getnewsletteremail() {

		$this->db->select('*');

		$this->db->from('newsletter');

		$this->db->order_by("id","DESC");

		$query = $this->db->get();		

		return $query->result();

	}

}

?>