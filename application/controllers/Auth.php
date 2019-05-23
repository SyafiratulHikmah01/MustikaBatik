<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_produk');

		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}
	}

	public function index ()
	{
		$data = array(
		'data'=>$this->model_produk->get_data());
		//var_dump ($data);
		$this->load->view('app/list_produk',$data);

	}


	function input(){
		$this->load->view('app/input_produk');
			
			if (isset($_POST['btnTambah'])){
			$data = $this->model_produk->input(array (
			'nama_produk' => $this->input->post('nama_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
			'berat_produk' => $this->input->post('berat_produk'),
			'foto_produk' => $this->input->post('foto_produk'),
			'deskripsi_produk' => $this->input->post('deskripsi_produk')));
			redirect('Auth');
		}
	}

	function delete($id){
		$this->model_produk->delete($id);
		redirect('Auth');
	}

	function edit($id){
		$id = $this->uri->segment(3);
		//var_dump($id);
		$data = array (
			'user' => $this->model_produk->get_data_edit($id)
		);
		//var_dump($data);
		
		$this->load->view("app/edit_produk",$data);
	}
	
	function update(){
		$id = $this->input->post('nama_produk');
		//var_dump($id);
		$insert=$this->model_produk->update(array(

				'nama_produk' => $this->input-> post('nama_produk'),
				'harga_produk' => $this->input-> post('harga_produk'),
				'berat_produk' => $this->input-> post('berat_produk'),
				'foto_produk' => $this->input-> post('foto_produk'),
				'deskripsi_produk' => $this->input-> post('deskripsi_produk')
			), $id);
		redirect('Auth');
        }

}