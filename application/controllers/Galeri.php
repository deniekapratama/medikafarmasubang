<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function index()
	{
		
		$data['title'] = 'Galeri Medika Farma Subang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->db->get_where('galeri')->row_array();
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $this->load->model('Mgaleri');
		$data['galeri'] = $this->Mgaleri->tampil_data();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
        $this->load->view('galeri', $data);
		$this->load->view('templates/footer', $data);
        
	}
}