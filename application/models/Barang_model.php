<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function get_barang() {
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    public function search_data_barang($keyword) {
        $this->db->like('nama_barang', $keyword);
        $query = $this->db->get('barang');
        return $query->result_array();
    }
}
