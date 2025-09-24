<?php

    class Model_Certificate extends CI_Model {

        public function add($data)
    	{

    		$this->db->insert('certificate', $data);

    	}

        public function edit($id,$data)
    	{

    		$this->db->where('id',$id);

    		$this->db->update('certificate',$data);

    	}

        public function delete($data)
    	{

    		// if($data){
            //     foreach($data as $id){
            //         $postdata=array(
            //             'status'=>1,
            //         );
            //         $this->db->where('id', $id);
            //         $this->db->update('certificate',$postdata);
                    
            //     }
            // };

            for ($i = 0; $i <= count($data); $i++)
            {
                $this->db->where('id', $data[$i]);
                $this->db->delete('certificate');
            }

    	}

        public function active($data)
    	{

    		if($data){
                foreach($data as $id){
                    $postdata=array(
                        'status'=>1,
                    );
                    $this->db->where('id', $id);
                    $this->db->update('certificate',$postdata);
                    
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
                    $this->db->update('certificate',$postdata);
                    
                }
            };

    	}

        public function getimage($id) {

    		$condition = "id =" . "'" . $id . "'";

    		$this->db->select('*');

    		$this->db->from('certificate');

    		$this->db->where($condition);

    		$this->db->limit(1);

    		$query = $this->db->get();

    		if ($query->num_rows() == 1) {

    		return $query->row();

    		} else {

    		return false;

    		}

    	}

    	

        public function getimages() {

    		$this->db->select('*');

    		$this->db->from('certificate');

    		$query = $this->db->get();

    		return $query->result();

    	}

    }

?>