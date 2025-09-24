<?php
class Model_eventforms extends CI_Model {
	
	public function delete($data)
	{
		for ($i = 0; $i <= count($data); $i++)
		{
			$this->db->where('id', $data[$i]);
			$this->db->delete('eventformdetail');
		}
	}

	public function geteventformss() {
		$this->db->select('*');
		$this->db->from('eventformdetail');
		$this->db->order_by("id","DESC");
		$query = $this->db->get();
		return $query->result();
	}
}
?>