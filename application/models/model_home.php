<?php
class model_home extends CI_Model {
	
	function get_table(){
        return $this->db->get("home");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM home");
		return $query->result();
		//return $query->result_array();
	}

	function input($data = array()){
		//query builder
		return $this->db->insert('home',$data);
	}

	function delete($id){
		$this->db->where('id_produk',$id);
		$this->db->delete('home');
		
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM home where id_produk='$id'");
		return $query->result_array();
	}

	function update($data=array(),$id){
		$this->db->where('id_produk',$id);
		return $this->db->update('home',$data);
	}
}
