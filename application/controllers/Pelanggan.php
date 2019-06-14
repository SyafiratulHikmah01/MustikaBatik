<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model_pelanggan');

	}

	public function index (){

		if ( ! $this->session->logged_in ) {
					redirect('loginproses/login');
				}
		$data = array(
		'data'=>$this->model_pelanggan->get_data());

		$this->load->view('app/list_pelanggan',$data);
	}

	function delete($id){
		$this->model_pelanggan->delete($id);
		redirect('Pelanggan');
	}

	public function login()
	{
		if ($this->input->post('submit', TRUE) == 'Submit') 
		{
			$email = $this->input->post('email_pelanggan', TRUE);
			$pass = $this->input->post('password_pelanggan', TRUE);

			$cek = $this->model_pelanggan->get_where('pelanggan', array('email_pelanggan' => $email ));

			if ($cek->num_rows() > 0) {
				$data = $cek->row();

				if (password_verify($pass, $data->password_pelanggan))
			    {
			    	$datauser = array (
			    		'id' => $data->id_pelanggan,
			    		'nama' => $data->nama_pelanggan,
			    		'email' => $data->email_pelanggan,
			    		'no_hp' => $data->telepon_pelanggan
	
			    	);

			    	$this->session->set_userdata($datauser);

			    	redirect(current_url());
				} else {
					$this->session->set_flashdata('alert', "Password yang anda masukkan salah");
				}
				

			} else {
					$this->session->set_flashdata('alert', "Username yang anda masukkan salah");

			}
			
		}
		if($this->session->userdata('id') == TRUE)
		{
			redirect('cart/index');
		}

		redirect('cart/index');
	}
	public function logout()
	{
		$this->session->sess_destroy(); 
		redirect('HomeUser');
	}


	
}