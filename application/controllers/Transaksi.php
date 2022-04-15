<?php
    class Transaksi extends CI_Controller{
        public function index(){
            $add =
            [
                'id_konsumen'        => $this->input->post('id_konsumen'),
                'id_jenis'           => $this->input->post('id_jenis'),
                'tanggal_cek_in'     => $this->input->post('tanggal_cek_in'),
                'tanggal_cek_out'    => $this->input->post('tanggal_cek_out'),
                'lama_sewa'          => $this->input->post('lama_sewa'),
            ];
            $this->db->insert('tbl_transaksi', $add);
            redirect('Pesan/detail');
        }

        public function data_transaksi()
	{
		$this->load->model('M_admin');
		$data['transaksi']= $this->M_admin->data_transaksi()->result();
		$this->load->view('partisi_admin/head');
		$this->load->view('partisi_admin/navbar');
		$this->load->view('data_transaksi',$data);
		$this->load->view('partisi_admin/footer');
		$this->load->view('partisi_admin/js');
	}

    }