<?php
    class M_admin extends CI_Model{
        function data_kamar()
        {
            return $this->db->get('tbl_kamar');
        }

        function data_user()
        {
            return $this->db->get('tbl_user');
        }

         function jenis_kamar()
         {
            return $this->db->get('tbl_jenis_kamar');
        }

         function data_transaksi()
         {
            return $this->db->get('tbl_transaksi');
        }

        function data_konsumen()
        {
            return $this->db->get('tbl_konsumen');
        }
        function join_kamar()
        {
            $this->db->select('*');
            $this->db->from('tbl_kamar');
            $this->db->join('tbl_jenis_kamar','tbl_jenis_kamar.id_jenis = tbl_kamar.id_jenis');      
            $query = $this->db->get();
            return $query;
        }
        function join_transaksi()
        {
            $this->db->select('*');
            $this->db->from('tbl_transaksi');
            $this->db->join('tbl_jenis_kamar','tbl_jenis_kamar.id_jenis = tbl_transaksi.id_jenis');      
            $query = $this->db->get();
            return $query;
        }
    }