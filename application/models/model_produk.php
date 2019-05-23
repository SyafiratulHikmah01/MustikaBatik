<?php
class model_produk extends CI_Model {
	
	function get_table(){
        return $this->db->get("produk");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM produk");
		return $query->result();
		//return $query->result_array();
	}

	function input($data = array()){
		//query builder
		return $this->db->insert('produk',$data);
	}

	function delete($id){
		$this->db->where('id_produk',$id);
		$this->db->delete('produk');
		
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM produk where id_produk='$id'");
		return $query->result_array();
	}

	function update($data=array(),$id){
		$this->db->where('nama_produk',$id);
		return $this->db->update('produk',$data);
	}
}
