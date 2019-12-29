<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
	public function index()
	{
        $data['title'] = 'Fasilitas';
        

		$this->load->view('templates/header');
		$this->load->view('templates/menu');		
		$this->load->view('fasilitas', $data);
		$this->load->view('templates/footer');
	}
}