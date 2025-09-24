<?php

class Model_Adminservice extends CI_Model {

	

    public function add($data)

	{

		$this->db->insert('category', $data);

	}

	

    public function edit($id,$data)

	{

		$this->db->where('id',$id);

		$this->db->update('category',$data);

	}

	

    public function delete($data)
	{
		// echo "ok"; exit;
		for ($i = 0; $i <= count($data); $i++)
        {
        	$this->db->where('id', $data[$i]);
        	$this->db->delete('category');
        }
	}


    public function active($data)

	{

		if($data){
			foreach($data as $id){
				$postdata=array(
					'status'=>1,
				);
				$this->db->where('id', $id);
				$this->db->update('category',$postdata);
				
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
				$this->db->update('category',$postdata);
				
			}
		};

	}

	

    public function getadminservice($id) {

		$condition = "id =" . "'" . $id . "'";

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

	

    public function getadminservices() {

		$this->db->select('*');

		$this->db->from('category');

		$query = $this->db->get();

		return $query->result();

	}

}

?>