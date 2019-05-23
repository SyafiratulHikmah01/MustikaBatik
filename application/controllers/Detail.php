<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('model_detail', '', TRUE);
		$this->load->helper(array('form', 'url'));

		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}
	}

	// public function index()
	// {'data' => $this->model_detail->get_data1($id)
	// 	$data = array(
	// 	'data'=>$this->model_detail->get_data());
	// 	$this->load->view('app/detail_pembelian',$data);
	// }

	function index()
	{
	$id = $this->uri->segment (3);
	//var dump (%id)
	$data = array(
		'user' => $this->model_detail->get_data($id),
		'data' => $this->model_detail->get_data1($id)

	);
	//var_dump($data)
	$data['id_pembelian'] = $this->model_detail->get_pembelian();
	$data['id_pelanggan'] = $this->model_detail->get_pelanggan();
	$data['id_produk'] = $this->model_detail->get_produk();
	$data['id_pembelian_produk'] = $this->model_detail->get_pembelianproduk();

	

	
	$this->load->view("app/detail_pembelian", $data);
	

	}
	
}