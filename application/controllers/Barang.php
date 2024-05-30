<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model and URL helper
        $this->load->model('Barang_model');
        $this->load->helper('url');
    }

    public function index() {
        // Set data for the view
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_barang();
        
        // Load the content and template
        $data['content'] = $this->load->view('barang/list_barang', $data, true);
        $this->load->view('template/template', $data);
    }
    

    public function search_barang() {
        // Get search keyword from POST request
        $keyword = $this->input->post('keyword');
        
        // Set data for the view
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'barang';
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $data['keyword'] = $keyword;
        
        // Load the content and template
        $data['content'] = $this->load->view('barang/list_barang', $data, true);
        $this->load->view('template/template', $data);
    }
}
