<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_detail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('User_modeldetail');
		#
	}
	function detail($id){
	$id = $this->uri->segment (3);
	//var dump (%id)
	$data = array(
		'data'=>$this->User_modeldetail->get_data_detail($id));
	//var_dump($data)
	$data['id_produk'] = $this->User_modeldetail->get_data();
	$data['nama_produk'] = $this->User_modeldetail->get_data();

	$data['content'] = 'public/content/c_detail';
	$this->load->view('index',$data);	
	
	

	}

}