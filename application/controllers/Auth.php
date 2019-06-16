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


	// function input(){
	// 	$this->load->view('app/input_produk');
			
	// 		if (isset($_POST['btnTambah'])){
	// 		$data = $this->model_produk->input(array (
	// 		'nama_produk' => $this->input->post('nama_produk'),
	// 		'harga_produk' => $this->input->post('harga_produk'),
	// 		'berat_produk' => $this->input->post('berat_produk'),
	// 		'foto_produk' => $this->input->post('foto_produk'),
	// 		'deskripsi_produk' => $this->input->post('deskripsi_produk')));
	// 		redirect('Auth');
	// 	}
	// }

	public function tambah(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			$upload = $this->model_produk->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->model_produk->save($upload);
				
				redirect('Auth'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}	
		$this->load->view('app/input_produk', $data);
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
		$id = $this->input->post('id_produk');
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