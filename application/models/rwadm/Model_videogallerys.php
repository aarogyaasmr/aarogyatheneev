
<?php
class Model_videogallerys extends CI_Model {
	
	public function getadminservices() {

		$this->db->select('*');

		$this->db->from('category');

		$query = $this->db->get();

		return $query->result();

	}

	public function add($data,$category)
	{
		$this->db->insert('videogallery', $data);
		$insert_id = $this->db->insert_id();
		for ($i = 0; $i <= count($category)-1; $i++)
        {
        	$data = array(
		        'category_id'  =>  $category[$i],
		        'video_id'   =>  $insert_id
		    );
			$this->db->insert('videocategory', $data);
        }

	}
	public function edit($id,$data,$category)
	{
		$this->db->where('id',$id);
		$this->db->update('videogallery',$data);
		$this->db->where('video_id', $id);
        $this->db->delete('videocategory');
        
        for ($i = 0; $i <= count($category)-1; $i++)
        {
        	$data = array(
		        'category_id'  =>  $category[$i],
		        'video_id'   =>  $id
		    );
			$this->db->insert('videocategory', $data);
        }
	}
	public function delete($data)
	{
		for ($i = 0; $i <= count($data); $i++)
        {
        $this->db->where('id', $data[$i]);
        $this->db->delete('videogallery');
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
	        $this->db->update('videogallery',$postdata);
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
	        $this->db->update('videogallery',$postdata);
        }
	}
	public function getvideo($id) {
		$condition = "id =" . "'" . $id . "'";
		$this->db->select('*');
		$this->db->from('videogallery');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
		return $query->row();
		} else {
		return false;
		}
	}
	public function getvideos() {
		$this->db->select('*');
		$this->db->from('videogallery');
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function getvideocategory($video_id,$category_id) {
		$condition = "video_id ='" . $video_id . "' and category_id ='" . $category_id . "'";
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
}
?>