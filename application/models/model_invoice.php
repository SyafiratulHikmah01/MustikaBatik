<?php 
class Model_invoice extends CI_Model {

	function get_invoice_id($id_transaksi){

		$this->db->select('*');
		$this->db->from('pembelian_produk pp');
		$this->db->join('pembelian pb', 'pb.id_pembelian=pp.id_pembelian', 'left');
		$this->db->join('pelanggan pl', 'pl.id_pelanggan=pp.id_pelanggan', 'left');
		$this->db->join('produk pd', 'pd.id_produk=pp.id_produk', 'left');
		$this->db->where('pp.id_pembelian_produk');



	}

	function get_where($table = null, $where = null)
	{
		$this->db->from($table);
		$this->db->where($where);

		return $this->db->get();
	}
}


 ?>