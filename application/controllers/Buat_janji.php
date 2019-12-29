<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buat_Janji extends CI_Controller
{
	public function index()
	{
		
		$data['title'] = 'Buat Janji Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jadwal_dokter'] = $this->db->get_where('jadwal_dokter')->row_array();
        $data['jadwal_dokter'] = $this->db->get('jadwal_dokter')->result_array();
        $this->load->model('Mjadwal_dokter');
		$data['jadwal_dokter'] = $this->Mjadwal_dokter->tampil_data();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
        $this->load->view('buat_janji', $data);
		$this->load->view('templates/footer', $data);
        
	}
}