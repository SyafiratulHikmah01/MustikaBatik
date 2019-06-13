<?php
class User_modeldetail extends CI_Model {
	

    function get_data(){
		$query = $this->db->query("SELECT * FROM produk");
		return $query->result();
		//return $query->result_array();
	}

	function get_data_detail($id=NULL){
    	$this->db->select('*');
    	$this->db->from('produk');
    	$this->db->where('produk.id_produk', $id);
		$query= $this->db->get();
		return $query->result();
		
		//return $query->result_array();
	}

	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}

}