<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index() {
        $this->db->get('tb_barang')->result_array();
        $this->load->view('landing');
    }
}