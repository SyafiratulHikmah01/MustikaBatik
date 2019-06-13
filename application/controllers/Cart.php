<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('cart');
		$this->load->model('User_modeldetail');
		#
	}

	public function index(){
	$data['content'] = 'public/content/c_cart';
	$this->load->view('index',$data);	
	}

	function add()
	{
		if(is_numeric($this->uri->segment(3))){

			$id = $this->uri->segment(3);

			$get = $this->User_modeldetail->get_where('produk', array('id_produk' => $id))->row();

			$data = array(

				'id' => $get->id_produk,
				'name' => $get->nama_produk,
				'price' =>$get->harga_produk,
				'berat' => $get->berat_produk,
				'qty' => 1

			);

			$this->cart->insert($data);

			echo '<script type="text/javascript">window.history.go(-1);</script>';

		}else{
			redirect('Produk');
		}
		

	}

}