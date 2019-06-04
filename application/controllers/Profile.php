<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_profile');

		if(! $this->session->logged_in){
			redirect('loginproses/login');
		}

	}

	public function index (){
		$data = array(
		'data'=>$this->model_profile->get_data());
		//var_dump ($data);
		$this->load->view('app/list_profile',$data);

	}
}