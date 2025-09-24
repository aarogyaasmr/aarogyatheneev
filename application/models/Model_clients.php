<?php
class Model_Clients extends CI_Model {
	public function getclients() {
		$this->db->select('*');
		$this->db->from('clients');
		$query = $this->db->get();
		return $query->result();
	}
}
?>