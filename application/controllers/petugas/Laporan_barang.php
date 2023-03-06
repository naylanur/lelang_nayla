<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Barang extends CI_Controller
{

		
	public function index()
    {
        $args = [
            'judul' => 'Laporan Barang',
        ];

        $this->load->view('templates_admin/header', $args);
        $this->load->view('templates_admin/sidebar_petugas', $args);
        $this->load->view('petugas/laporan_barang/v_laporan_barang', $args);
        $this->load->view('templates_admin/footer');
    }

	public function cetak_laporan_barang() {
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		//load model dashboard
		$data['laporan'] = $this->Lelang_model->laporan_barang();

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-barang.pdf";

		//run dompdf
		$this->pdf->load_view('petugas/laporan_barang/cetak_laporan_barang', $data);	
	}
	
	
}
	
	