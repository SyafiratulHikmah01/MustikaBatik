<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_pelanggan');
	}

	public function index (){
		$data = array(
		'data'=>$this->model_pelanggan->get_data());

		$this->load->view('app/list_pelanggan',$data);
	}
	
	function input(){
		$this->load->view('app/input_pelanggan');
			
			if (isset($_POST['btnTambah'])){
			$data = $this->model_pelanggan->input(array (
			'email_pelanggan' => $this->input->post('email_pelanggan'),
			'password_pelanggan' => $this->input->post('password_pelanggan'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'telepon_pelanggan' => $this->input->post('telepon_pelanggan')));
			redirect('Pelanggan');
		}
	}
}