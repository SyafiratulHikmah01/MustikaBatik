<?php
class model_produk extends CI_Model {
	
	function get_table(){
        return $this->db->get("produk");
    }

    function get_data(){
		$query = $this->db->query("SELECT * FROM produk");
		return $query->result();
		//return $query->result_array();
	}

	// function input($data = array()){
	// 	//query builder
	// 	return $this->db->insert('produk',$data);
	// }

	public function upload(){
		$config['upload_path'] = './foto_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('foto_produk')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function save($upload){
		$data = array(
			'nama_produk'=>$this->input->post('nama_produk'),
			'harga_produk'=>$this->input->post('harga_produk'),
			'berat_produk'=>$this->input->post('berat_produk'),
			'foto_produk' => $upload['file']['file_name'],
			'deskripsi_produk'=>$this->input->post('deskripsi_produk')
		);
		
		$this->db->insert('produk', $data);
	}

	function delete($id){
		$this->db->where('id_produk',$id);
		$this->db->delete('produk');
		
	}

	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM produk where id_produk='$id'");
		return $query->result_array();
	}

	function update($data=array(),$id){
		$this->db->where('id_produk',$id);
		return $this->db->update('produk',$data);
	}
}
