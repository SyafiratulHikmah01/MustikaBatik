<?php
class model_detail extends CI_Model {
	
	
 //    function get_data($id){
 //    	$this->db->select('*');
 //    	$this->db->from('pembelian');
	// 	$this->db->join('pelanggan', 'pelanggan.id_pelanggan=pembelian.id_pelanggan' );
	// 	$this->db->where('pembelian', 'pembelian.id_pembelian=['$_G']' );
	// 	$query= $this->db->get();
	// 	return $query->result();
		
	// 	//return $query->result_array();
	// }

	function get_data($id)
	{
    	$this->db->select('*');
    	$this->db->from('pembelian');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan=pembelian.id_pelanggan' );
    	$this->db->where('pembelian.id_pembelian', $id);
		$query= $this->db->get();
		return $query->result();
		
		//return $query->result_array();
	}

	function get_data1($id){
    	$this->db->select('*');
    	$this->db->from('pembelian_produk');
		$this->db->join('produk', 'pembelian_produk.id_produk=produk.id_produk' );
    	$this->db->where('pembelian_produk.id_pembelian', $id);
		$query= $this->db->get();
		return $query->result();
		
		//return $query->result_array();
	}

	public function get_pembelian()
	{
		$query = $this->db->query("SELECT * FROM pembelian");
		return $query->result();
	}

	public function get_pelanggan()
	{
		$query = $this->db->query("SELECT * FROM pelanggan");
		return $query->result();
	}

	public function get_produk()
	{
		$query = $this->db->query("SELECT * FROM produk");
		return $query->result();
	}

	public function get_pembelianproduk()
	{
		$query = $this->db->query("SELECT * FROM pembelian_produk");
		return $query->result();
	}



}