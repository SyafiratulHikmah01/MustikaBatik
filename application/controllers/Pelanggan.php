<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_pelanggan');

		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}
	}

	public function index (){
		$data = array(
		'data'=>$this->model_pelanggan->get_data());

		$this->load->view('app/list_pelanggan',$data);
	}

	function delete($id){
		$this->model_pelanggan->delete($id);
		redirect('Pelanggan');
	}
	
}