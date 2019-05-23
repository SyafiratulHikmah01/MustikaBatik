<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_pembelian', '', TRUE);
		$this->load->helper(array('form', 'url'));

		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}
	}

	public function index()
	{
		$data = array(
		'data'=>$this->model_pembelian->get_data());
		$this->load->view('app/list_pembelian',$data);
	}

	function delete($id)
	{
		$this->model_pembelian->delete($id);
		redirect('Pembelian');
	}
}