<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

		
	public function index()
	{
		$args = [
			'judul' => 'Laporan'
		];
		
		$this->load->view('templates_admin/header', $args);
		$this->load->view('templates_admin/sidebar_petugas', $args);
		$this->load->view('petugas/laporan/v_laporan', $args);
		$this->load->view('templates_admin/footer');
	}
	
	public function cetak_laporan() {
		//load library
		$this->load->model('Lelang_model');
		$this->load->library('pdf');

		$tgl_lelang_awal = $this->input->post('tgl_lelang_awal');
		$tgl_lelang_akhir = $this->input->post('tgl_lelang_akhir');
	
		// load model dashboard
		$data['laporan'] = $this->Lelang_model->filter_laporan($tgl_lelang_awal, $tgl_lelang_akhir);

		$this->session->set_userdata('tgl_lelang_awal', $tgl_lelang_awal);
		$this->session->set_userdata('tgl_lelang_akhir', $tgl_lelang_akhir);

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-lelang.pdf";

		// run dompdf
		$this->pdf->load_view('petugas/laporan/cetak_laporan', $data);
	}
}
	
	