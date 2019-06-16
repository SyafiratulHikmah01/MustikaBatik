<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('cart');
		$this->load->model('model_invoice');
		#
	}

	public function index()
	{
		if (!$this->session->userdata('id')) {
			redirect('homeuser');
		}

		$data['get'] = $this->model_invoice->get_where('pembelian',['id_pelanggan' => $this->session->userdata('id')] );

		$data['content'] = 'public/content/c_history';
		$this->load->view('index',$data);	
	}

	public function detail()
	{
		if (!is_numeric($this->uri->segment(3))) {
			redirect('homeuser');
		}

		$table = "pembelian pb JOIN pembelian_produk pp ON (pb.id_pembelian = pp.id_pembelian) JOIN produk pr ON (pp.id_produk = pr.id_produk) JOIN pelanggan pl ON (pl.id_pelanggan = pb.id_pelanggan)";
		$data['get'] = $this->model_invoice->get_where($table,['pb.id_pembelian' => $this->uri->segment(3)] );
		$this->load->view('public/content/c_invoice',$data);
	}

    public function upload_bukti()
    {
      if ($this->input->post('submit', TRUE) == 'Submit') 
        {
            $id = $this->uri->segment(3);           


            $config['upload_path'] = './foto_bukti/';
            $config['allowed_types'] = 'jpg|png|jpeg|';
            $config['max_size'] = '2048';
            $config['file_name'] = 'bukti'.date('Y_m_d_H_i_s');

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

    //check BUkti
        if (!$this->upload->do_upload('bukti')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error',$error['error']);
                redirect(current_url());
        }else {

        };
     //end check BUkti

            if ($this->upload->do_upload('bukti')) 
            {

                $gbr = $this->upload->data(); 

            //insert

                $this->db->where('id_pembelian', $id);
                $this->db->update('pembelian',['status_pembelian' => 'Menunggu Konfirmasi']);

                $this->db->where('id_pembelian', $id);
                $this->db->update('pembelian',['gambar' => $gbr['file_name']]);

                $this->session->set_flashdata('success', 'Upload Bukti Pembayaran Berhasil Silahkan Tunggu Konfirmasi Dari Admin');
                redirect("invoice/detail/".$id);

            } else {

                $this->session->set_flashdata('alert', 'Cek Kembali Foto Anda !');
                redirect("invoice/detail/".$id);

                // echo $this->upload->display_errors('<p style="color:#fff">', '</p>');
            }


        }else{
              $this->session->set_flashdata('alert', 'Upload Bukti gagal !');
                redirect("invoice/detail/".$id);

     
        }
    }
}