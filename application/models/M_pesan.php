<?php 
    class M_pesan extends CI_Model{
        public function Data_provinsi(){
            return $this->db->get('tbl_provinsi')->result();
        }

        public function Data_transaksi(){
            return $this->db->get('tbl_transaksi')->result();
        }
        // public function detail_transaksi(){
        //     return $this->db->get('tbl_transaksi')->result();
        // }
        
        public function detail_transaksi(){
            $this->db->select('*');
            $this->db->from('tbl_transaksi');
            $this->db->join('tbl_konsumen','tbl_konsumen.id_konsumen = tbl_transaksi.id_konsumen');      
            $query = $this->db->get();
            return $query;
        }

        public function get_data_by_id($id_konsumen){
            return $this->db->get_where('tbl_konsumen',array('id_konsumen'=>$id_konsumen))->result();
        }
    }