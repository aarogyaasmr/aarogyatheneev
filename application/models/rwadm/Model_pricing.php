<?php

class Model_Pricing extends CI_Model {

	

    public function add($data)

	{

		$this->db->insert('pricing', $data);

	}

	

    public function edit($id,$data)

	{

		$this->db->where('id',$id);

		$this->db->update('pricing',$data);

	}

	

    public function delete($data)

	{

		if($data){
			foreach($data as $id){
				$postdata=array(
					'status'=>1,
				);
				$this->db->where('id', $id);
				$this->db->update('pricing',$postdata);
				
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
				$this->db->update('pricing',$postdata);
				
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
				$this->db->update('pricing',$postdata);
				
			}
		};

	}

	

    public function getadminpricing($id) {

		$condition = "id =" . "'" . $id . "'";

		$this->db->select('*');

		$this->db->from('pricing');

		$this->db->where($condition);

		$this->db->limit(1);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {

		    return $query->row();

		} else {

		    return false;

		}

	}

	

    public function getadminpricings() {

		$this->db->select('*');

		$this->db->from('pricing');

		$query = $this->db->get();

		return $query->result();

	}

}

?>