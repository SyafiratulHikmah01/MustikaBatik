<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('modelhome');
	}
	
	public function index()
	{

		$data = array(
		'data'=>$this->modelhome->get_data());
		$data['content'] = 'public/content/c_home';
		$this->load->view('index', $data);
	}

	
	

	// function detail($id){
	// 	$id = $this->uri->segment(3);
	// 	//var_dump($id);
	// 	$data = array (
	// 		'user' => $this->modelproduk->get_data_detail($id)
	// 	);
	// 	//var_dump($data);
		
	// 	$this->load->view('produk',$data);
	// }

}
