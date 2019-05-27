<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_testimoni');
	}
	public function index (){
		$data = array(
		'data'=>$this->model_testimoni->get_data());

		$this->load->view('app/list_testimoni',$data);
	}
	function update(){
		$id = $this->input->post('id');
		//var_dump($id);
		$insert=$this->model_testimoni->update(array(

				'nama' => $this->input-> post('nama'),
				'gambar' => $this->input-> post('gambar'),
				'deskripsi' => $this->input-> post('deskripsi'),
				
			), $id);
		redirect('Testimoni');
    }

	function delete($id){
		$this->model_testimoni->delete($id);
		redirect('Testimoni');
	}
	function edit($id){
		$id = $this->uri->segment(3);
		//var_dump($id);
		$data = array (
			'user' => $this->model_testimoni->get_data_edit($id)
		);
		//var_dump($data);
		
		$this->load->view("app/edit_testimoni",$data);
	}
	
	function input(){
		$this->load->view('app/input_testimoni');
			
			if (isset($_POST['btnTambah'])){
			$data = $this->model_testimoni->input(array (
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'gambar' => $this->input->post('gambar'),
			'deskripsi' => $this->input->post('deskripsi')));
			redirect('Testimoni');
		}
	}
}