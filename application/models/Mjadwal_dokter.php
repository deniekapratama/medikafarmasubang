<?php
class Mjadwal_dokter extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('jadwal_dokter')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('jadwal_dokter', $data);
    }

    public function detail_jadwal_dokter($id)
    {
        //return $this->db->get_where('alumni', ['id' => $id])->row();
        return $this->db->query("SELECT * FROM jadwal_dokter WHERE id = '$id'");
    }

    public function hitungJumlahJadwalPraktek()
    {
        $query = $this->db->get('jadwal_dokter');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function delete_jadwal_dokter($id)
    { //fungsi delete berdasarkan id
        $this->db->where('id', $id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('jadwal_dokter'); //eksekusi
        return;
    }
}
