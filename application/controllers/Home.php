<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_home');

		if (! $this->session->logged_in){
			redirect('loginproses/login');
		}
	}
public function index ()
	{
		$data = array(
		'data'=>$this->model_home->get_data());
		//var_dump ($data);
		$this->load->view('app/list_home',$data);

	}

	function input(){
		$this->load->view('app/input_home');
			
			if (isset($_POST['btnTambah'])){
			$data = $this->model_home->input(array (
			'nama_produk' => $this->input->post('nama_produk'),
			'harga_produk' => $this->input->post('harga_produk'),
			'berat_produk' => $this->input->post('berat_produk'),
			'foto_produk' => $this->input->post('foto_produk'),
			'deskripsi_produk' => $this->input->post('deskripsi_produk')));
			$this->session->set_flashdata('success', 'data telah berhasil di tambahkan');
			redirect('Home');
		}
	}

	function delete($id){
		$this->model_home->delete($id);
		$this->session->set_flashdata('success', 'Delete Telah Berhasil');
		redirect('Home');
	}

	function edit($id){
		$id = $this->uri->segment(3);
		//var_dump($id);
		$data = array (
			'user' => $this->model_home->get_data_edit($id)
		);
		//var_dump($data);
		
		$this->load->view("app/edit_home",$data);
	}
	
	function update(){
		$id = $this->input->post('id_produk');
		//var_dump($id);
		$insert=$this->model_home->update(array(

				'nama_produk' => $this->input-> post('nama_produk'),
				'harga_produk' => $this->input-> post('harga_produk'),
				'berat_produk' => $this->input-> post('berat_produk'),
				'foto_produk' => $this->input-> post('foto_produk'),
				'deskripsi_produk' => $this->input-> post('deskripsi_produk')
			), $id);
		redirect('Home');
        }

}
