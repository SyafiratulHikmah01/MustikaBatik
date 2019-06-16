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

	public function index()
	{
		if(!$this->cart->contents())
		{
			$this->session->set_flashdata('alert','keranjang Kosong tambahkan barang dlu!');
			redirect('Produk');
		}


		$data['content'] = 'public/content/c_cart';
		$this->load->view('index',$data);	
	}

	public function checkout()
	{
		if($this->input->post('submit', TRUE) == 'Submit')
		{

			$id_pembelian = time();
			$id_pelanggan = $this->session->userdata('id');
			$tgl_pembelian = date("Y-m-d");
			$total = $this->input->post('total');
			$kota = $this->input->post('kota');
			$tarif = $this->input->post('tarif');
			$alamat = $this->input->post('alamat');	
			$status = 'pending';

			$data = array(
				'id_pembelian' => $id_pembelian,
				'id_pelanggan' => $id_pelanggan,
				'tanggal_pembelian' => $tgl_pembelian,
				'total_pembelian' => $total,
				'nama_kota' => $kota,
				'tarif' => $tarif,
				'alamat_pengiriman' => $alamat,
				'status_pembelian' => $status
			);
			$this->User_modeldetail->insert('pembelian',$data);
				foreach ($this->cart->contents() as $key) {
					$detail = [
						'id_pembelian' => $id_pembelian,
						'id_produk' => $key['id'],
						'jumlah' => $key['qty'],
						'nama' => $key['name'],
						'harga' => $key['price'],
						'berat' => $key['berat'],
						'subberat' => $key['berat']*$key['qty'],
						'subharga' => $key['price']*$key['qty']

					];

					$this->User_modeldetail->insert('pembelian_produk',$detail);

				}
					$this->cart->destroy();
					$this->session->set_flashdata('success', 'Pembelian Berhasil');
					redirect('HomeUser');


				}
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

	public function update_barang()
	{


			$data = array(
				'qty' => $this->input->post('qty', TURE),
				'rowid' => $this->uri->segment(3)
			);

			$this->cart->update($data);

			redirect('cart/index');


	}

	public function delete_cart()
	{

		$rowid = $this->uri->segment(3);

		$this->cart->remove($rowid);

		redirect('cart/index');

	}

}