<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	//melempar variable data di controler
	public function register($data)
	{
		return $this->db->insert('admin', $data);
	}

	public function cekUsername($username)
	{
		return $this->db->get_where('admin', ['username' => $username]);
	}
}