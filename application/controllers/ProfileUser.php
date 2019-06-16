<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileUser extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('cart'));

		$this->load->model('modelabout');
	}
	
	public function index()
	{

		$data = array(
		'data'=>$this->modelabout->get_data());
		$data['content'] = 'public/content/c_about';
		$this->load->view('index', $data);
	}

}
