<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->helper(array('url'));
		// $this->load->model('model_produk');
		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}

	}

	public function index (){
		$this->load->view('app/list_home');
	}
	

}