<?php
class Model_events extends CI_Model {
	
public function add($data)
	{
		$this->db->insert('events', $data);
	}
public function edit($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('events',$data);
	}
public function delete($data)
	{
		for ($i = 0; $i <= count($data); $i++)
        {
        $this->db->where('id', $data[$i]);
        $this->db->delete('events');
        }
	}

public function copy($data)
	{
		for ($i = 1; $i <= count($data); $i++)
        {
        	$this->db->select('name, linkname, page_title, meta_keyword, meta_description, image, startdate,  	enddate,  shortdescription, description, status, date_added', false);
		    $query = $this->db->get('events');
	        $this->db->where('id', $data[$i]);
			$this->db->limit(1);
		    $this->db->insert('events',$query->row());
        }
	}

public function active($data)
	{
		for ($i = 0; $i <= count($data); $i++)
        {
        	$postdata=array(
			 'status'=>1,
			 );
	        $this->db->where('id', $data[$i]);
	        $this->db->update('events',$postdata);
        }
	}
public function inactive($data)
	{
		for ($i = 0; $i <= count($data); $i++)
        {
        	$postdata=array(
			 'status'=>0,
			 );
	        $this->db->where('id', $data[$i]);
	        $this->db->update('events',$postdata);
        }
	}
public function getnews($id) {
		$condition = "id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
public function getnewss() {
		$this->db->select('*');
		$this->db->from('events');
		$query = $this->db->get();
		return $query->result();
	}
}
?>