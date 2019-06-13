<?php
class model_profile extends CI_Model {

	function get_table(){
		return $this->db->get("profile");
	} 

	function get_data(){
		$query = $this->db->query("SELECT * FROM profile");
		return $query->result();
		//return $query->result_array();
	}

	function input($data = array()){
		//query builder
		return $this->db->insert('profile', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('profile');
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM profile where id='$id'");
		return $query->result_array();
	}

	function update($data=array(),$id){
		$this->db->where('judul', $id);
		return $this->db->update('profile', $data);
	}
}