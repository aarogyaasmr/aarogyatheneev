<?php
class Model_Gallery extends CI_Model {
	public function getgallerys() {
		$this->db->select('*');
		$this->db->from('gallery');
		$query = $this->db->get();
		return $query->result();
	}
}
?>