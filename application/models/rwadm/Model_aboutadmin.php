<?php
class Model_Aboutadmin extends CI_Model {
	
    public function logincheck($data)
	{
		$enc_pass  = md5($data['password']);
		$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $enc_pass . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
	}

    public function aboutinfo() {
    	//$condition = "user_name =" . "'" . $username . "'";
    	$this->db->select('*');
    	$this->db->from('aboutwebsite');
    	//$this->db->where($condition);
    	$this->db->limit(1);
    	$query = $this->db->get();
    	if ($query->num_rows() == 1) {
    	return $query->result();
    	} else {
    	return false;
    	}
    }
    
    public function updateabout($data)
	{
		//$this->db->where('id',$this->session->userdata['logged_in']['id']);
		$this->db->update('aboutwebsite',$data);
	}
}

?>