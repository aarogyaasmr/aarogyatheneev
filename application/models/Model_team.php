<?php
class Model_Team extends CI_Model {
	public function getteam() {
		$this->db->select('*');
		$this->db->from('team');
		$query = $this->db->get();
		return $query->result();
	}
}
?>