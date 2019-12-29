<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Home';
		
        $this->load->model('Mjadwal_dokter');
		$data['total_jadwal_praktek'] = $this->Mjadwal_dokter->hitungJumlahJadwalPraktek();

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');

	}
}