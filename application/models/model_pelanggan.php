<?php
class model_pelanggan extends CI_Model {
	
	function get_table(){
        return $this->db->get("pelanggan");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM pelanggan");
		return $query->result();
		//return $query->result_array();
	}

	function delete($id){
		$this->db->where('id_pelanggan',$id);
		$this->db->delete('pelanggan');
		
	}

}