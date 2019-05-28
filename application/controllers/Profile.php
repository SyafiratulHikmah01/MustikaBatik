<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_profile');

		// if(! $this->session->logged_in){
		// 	redirect('loginproses/login');
		// }

	}

	public function index (){
		$data = array(
		'data'=>$this->model_profile->get_data());
		//var_dump ($data);
		$this->load->view('app/list_profile',$data);

	}

	function input(){
		$this->load->view('app/input_profile');
			
			if (isset($_POST['btnTambah'])){
			$data = $this->model_profile->input(array (
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'foto' => $this->input->post('foto')));
			redirect('Profile');
		}
	}

	function delete($id){
		$this->model_profile->delete($id);
		redirect('Profile');
	}

	function edit($id){
		$id = $this->uri->segment(3);
		//var_dump($id);
		$data = array (
			'user' => $this->model_profile->get_data_edit($id)
		);
		//var_dump($data);
		
		$this->load->view("app/edit_profile",$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		//var_dump($id);
		$insert=$this->model_profile->update(array(
				'judul' => $this->input-> post('judul'),
				'deskripsi' => $this->input-> post('deskripsi'),
				'foto' => $this->input-> post('foto')
			), $id);
		redirect('Profile');
        }
}