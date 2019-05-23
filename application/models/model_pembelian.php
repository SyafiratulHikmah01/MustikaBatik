<?php
class model_pembelian extends CI_Model {
	
	
    function get_data(){
    	$this->db->select('*');
    	$this->db->from('pembelian');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan=pembelian.id_pelanggan' );
		$query= $this->db->get();
		return $query->result();
		
		//return $query->result_array();
	}

	function delete($id){
		$this->db->where('id_pembelian',$id);
		$this->db->delete('pembelian');
		
	}
}