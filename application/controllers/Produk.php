<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('cart'));

		$this->load->model('modelproduk');
	}
	public function index ()
	{
		$data = array(
		'data'=>$this->modelproduk->get_data());
		$data['content'] = 'public/content/c_produk';
		$this->load->view('index',$data);

	}
}