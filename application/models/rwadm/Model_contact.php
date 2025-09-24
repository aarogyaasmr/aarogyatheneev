<?php

class Model_Contact extends CI_Model {

    public function delete($data)

	{

		if($data){
			foreach($data as $id){
				$this->db->where('id', $id);
				$this->db->delete('contact');
			}
		};


	}

    public function getcontactlead() 

    {

		$this->db->select('*');

		$this->db->from('contact');

		$this->db->order_by("id","DESC");

		$query = $this->db->get();		

		return $query->result();

	}

}

?>