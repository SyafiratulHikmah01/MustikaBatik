<?php
class model_testimoni extends CI_Model {
	
	function get_table(){
        return $this->db->get("testimoni");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM testimoni");
		return $query->result();
		//return $query->result_array();
	}

	function input($data = array()){
		//query builder
		return $this->db->insert('testimoni',$data);
	}

	function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('testimoni');
		
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM testimoni where id='$id'");
		return $query->result_array();
	}

	function update($data=array(),$id){
		$this->db->where('id',$id);
		return $this->db->update('testimoni',$data);
	}
}
