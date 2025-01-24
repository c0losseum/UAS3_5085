<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(['Rekap_model']);
    }

    public function index() {
        $dosen_id = $this->session->userdata('dosen_id');

        // Ambil data mata kuliah berdasarkan dosen
        $data['matakuliah'] = $this->Rekap_model->get_matakuliah_by_dosen($dosen_id);
        $this->load->view('rekap/index', $data);
    }

   public function detail($id_matakuliah) {
    // Ambil data mahasiswa berdasarkan mata kuliah
    $data['mahasiswa'] = $this->Rekap_model->get_mahasiswa_by_matakuliah($id_matakuliah);
    $data['matakuliah'] = $this->db->get_where('matakuliah', ['id_matakuliah' => $id_matakuliah])->row();
    $this->load->view('rekap/detail', $data);
}



public function edit($id_mahasiswa = NULL, $id_matakuliah = NULL) {
    if ($id_mahasiswa === NULL || $id_matakuliah === NULL) {
        redirect('rekapitulasi');
    }

    // Jika ada post data
    if ($this->input->post('submit')) {
        $nilai = $this->input->post('nilai');
        
        // Gunakan model untuk update
        $update = $this->Rekap_model->update_nilai($id_mahasiswa, $id_matakuliah, $nilai);
        
        if ($update) {
            $this->session->set_flashdata('success', 'Nilai berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui nilai');
        }
        redirect('rekapitulasi/detail/' . $id_matakuliah);
    }
    
    // Ambil data untuk ditampilkan di form
    $this->db->select('mahasiswa.nama_mahasiswa, mahasiswa.nim, mahasiswa_matakuliah.nilai');
    $this->db->from('mahasiswa_matakuliah');
    $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = mahasiswa_matakuliah.id_mahasiswa');
    $this->db->where('mahasiswa_matakuliah.id_mahasiswa', $id_mahasiswa);
    $this->db->where('mahasiswa_matakuliah.id_matakuliah', $id_matakuliah);
    $data['mahasiswa'] = $this->db->get()->row();
    
    $data['id_mahasiswa'] = $id_mahasiswa;
    $data['id_matakuliah'] = $id_matakuliah;
    
    $this->load->view('rekap/edit', $data);
}
// rekapitulasi_controller:
public function delete($id_mahasiswa, $id_matakuliah) {
    // Hapus data (update nilai menjadi null)
    $delete = $this->Rekap_model->null_nilai($id_mahasiswa, $id_matakuliah);

    if ($delete) {
        $this->session->set_flashdata('success', 'Nilai berhasil dinullkan');
    } else {
        $this->session->set_flashdata('error', 'Gagal menullkan nilai');
    }

    redirect('rekapitulasi/detail/' . $id_matakuliah);
}


}
