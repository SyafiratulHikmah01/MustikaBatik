<?php
class modelproduk extends CI_Model {
	
	function get_table(){
        return $this->db->get("produk");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM produk");
		return $query->result();
		//return $query->result_array();
	}

	function get_data_detail($id){
		$query = $this->db->query("SELECT * FROM produk where id_produk='$id'");
		return $query->result_array();
	}
}