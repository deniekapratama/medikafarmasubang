<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Mjadwal_dokter');
		$this->load->model('Mgaleri');
		

	}
	
	public function index()
	{
		$data['title'] = 'Halaman Admin';
        $data['total_jadwal_praktek'] = $this->Mjadwal_dokter->hitungJumlahJadwalPraktek();
        $this->load->model('Mjadwal_dokter');
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/templates/footer');

		
	}
	
	public function jadwal_dokter()
	{

        $data['title'] = 'Jadwal Praktek Dokter';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jadwal_dokter'] = $this->db->get_where('jadwal_dokter')->row_array();
        $data['jadwal_dokter'] = $this->db->get('jadwal_dokter')->result_array();
        $this->load->model('Mjadwal_dokter');
		$data['jadwal_dokter'] = $this->Mjadwal_dokter->tampil_data();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/jadwal_dokter', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_jadwal()
	{
		$data['title'] = 'Tambah Jadwal Praktek Dokter';

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Jadwal Praktek Dokter';            
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/tambah_jadwal', $data);
			$this->load->view('admin/templates/footer');
        } else {
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');	
            $dokter_spesialis = $this->input->post('dokter_spesialis');								
            $image = $_FILES['image'];
            if ($image = '') { } else {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '10048';
                $config['upload_path'] = './assets/backend/img/dokter/';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
					echo "Ukuran Gambar Terlalu Besar! , Silahkan REFRESH WEB dan upload gambar dengan ukuran yang sudah di tentukan";					
                    die();
                } else {
                    $image = $this->upload->data('file_name');
                }
            }

            $data = array(
				'nama' => $nama,
				'keterangan' => $keterangan,	
                'dokter_spesialis' => $dokter_spesialis,							
                'image' => $image
            );

            $this->Mjadwal_dokter->insert($data, 'jadwal_dokter');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Dokter Added!</div>');
            redirect('admin/jadwal_dokter');
        }
	}

    public function detail_jadwal_dokter($id)
    {
        $data['title'] = 'Detail Jadwal Dokter';
        $this->load->model('Mjadwal_dokter');
        $data['jadwal_dokter'] = $this->Mjadwal_dokter->detail_jadwal_dokter($id)->result();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/detail_jadwal_dokter', $data);
		$this->load->view('admin/templates/footer', $data);
    }

    function delete_jadwal_dokter($id)
    { //fungsi delete
        $this->load->model('Mjadwal_dokter'); //load model
        $this->Mjadwal_dokter->delete_jadwal_dokter($id); //ngacir ke fungsi delTransaksi
        redirect('admin/jadwal_dokter'); //redirect

    }


	public function galeri()
	{

        $data['title'] = 'Galeri Medika Farma Subang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->db->get_where('galeri')->row_array();
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $this->load->model('Mgaleri');
		$data['galeri'] = $this->Mgaleri->tampil_data();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/templates/topbar', $data);
		$this->load->view('admin/galeri', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah_galeri()
	{
		$data['title'] = 'Tambah Galeri Medika Farma Subang';

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');

        if ($this->form_validation->run() == false) {
			$data['title'] = 'Tambah Jadwal Praktek Dokter';            
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar', $data);
			$this->load->view('admin/templates/topbar', $data);
			$this->load->view('admin/tambah_galeri', $data);
			$this->load->view('admin/templates/footer');
        } else {
			$judul = $this->input->post('judul');
			$keterangan = $this->input->post('keterangan');								
            $image = $_FILES['image'];
            if ($image = '') { } else {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '40048';
                $config['upload_path'] = './assets/backend/img/galeri/';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
					echo "Ukuran Gambar Terlalu Besar! , Silahkan REFRESH WEB dan upload gambar dengan ukuran yang sudah di tentukan";					
                    die();
                } else {
                    $image = $this->upload->data('file_name');
                }
            }

            $data = array(
				'judul' => $judul,
				'keterangan' => $keterangan,							
                'image' => $image
            );

            $this->Mgaleri->insert($data, 'galeri');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Dokter Added!</div>');
            redirect('admin/galeri');
        }
	}

}