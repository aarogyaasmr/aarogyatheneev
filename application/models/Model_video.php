
<?php
class Model_video extends CI_Model {
	
public function getvideo($id) {
		$condition = "id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('videocategory');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
public function getvideocategory() {
		$this->db->select('*');
		$this->db->from('videocategory');
		$query = $this->db->get();
		return $query->result();
	}

	 public function getcategoryvideo($category_id) {

         $condition= " vc.category_id = '".$category_id."'";
        $this->db->select('v.*');
        $this->db->from('videogallery as v');
        $this->db->join('video_category as vc', 'v.id = vc.video_id', 'inner');
        $this->db->where($condition);
        $this->db->group_by('v.id'); 
		$this->db->order_by("v.id", "desc");
        $query = $this->db->get();
        return $query->result();
    }


	 public function getallvideo() {

        $this->db->select('*');
        $this->db->from('videogallery');
        $this->db->group_by('id'); 
		$this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}
?>