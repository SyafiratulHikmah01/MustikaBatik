<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginProses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//ngeload model
		$this->load->model('login_model');
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->load->view('app/list_login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('app/list_login');
		}else{

			$username=$this->input->post('username');
			$cek = $this->login_model->cekUsername($username);
			if ( $cek->num_rows() === 1 ){

				$password = $this->input->post('password');

				if (password_verify($password, $cek->row()->password)) {
					
					$session['namalengkap'] = $cek->row()->namalengkap;
					$session['logged_in'] = TRUE ;

					$this->session->set_userdata($session);

					redirect('home');
					

				} else {
					redirect('loginproses/login');
				}
			}else{
				echo 'Maaf Username Anda Tidak Terdaftar';
			}
		}
	}

	public function register()
	{

		$this->load->view('app/register');
	}


	//dari proses_register akan dilempar ke model
	public function proses_register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[admin.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[admin.email]');
		$this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('konfirmasipassword', 'Konfirmasi Password', 'required|matches[password]');


		//gagal
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('app/register');
		} else { //jika berhasil

			//mengambil inputan form yang di buat dlm view (1)

			$data = [
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'namalengkap' => $this->input->post('namalengkap')
			];

			//memanggil methode register di RegisterModel (2) melempar data dari kontroler ke model lalu ke databse
			$insert = $this->login_model->register($data);

			if ($insert) {
				// echo 'Registerasi Berhasil';
				redirect('LoginProses/login');
			} else {
				echo "Terjadi Kesalahan saat Registerasi";
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('LoginProses/login');
	}
}


