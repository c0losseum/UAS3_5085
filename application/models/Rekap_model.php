<?php
class Rekap_model extends CI_Model {
    public function get_matakuliah_by_dosen($id_dosen) {
        $this->db->select('id_matakuliah, nama_matakuliah');
        $this->db->from('matakuliah');
        $this->db->where('id_dosen', $id_dosen);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_mahasiswa_by_matakuliah($id_matakuliah) {
        $this->db->select('mahasiswa.id_mahasiswa, mahasiswa.nama_mahasiswa, mahasiswa.nim, mahasiswa_matakuliah.nilai, mahasiswa_matakuliah.id as id'); // Tambahkan id dari tabel mahasiswa_matakuliah
        $this->db->from('mahasiswa_matakuliah');
        $this->db->join('mahasiswa', 'mahasiswa.id_mahasiswa = mahasiswa_matakuliah.id_mahasiswa');
        $this->db->where('mahasiswa_matakuliah.id_matakuliah', $id_matakuliah);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_nilai($id_mahasiswa, $id_matakuliah, $nilai) {
    $data = [
        'nilai' => $nilai
    ];
    
    return $this->db->where([
        'id_mahasiswa' => $id_mahasiswa,
        'id_matakuliah' => $id_matakuliah
    ])->update('mahasiswa_matakuliah', $data);
}
// rekap_model:
public function null_nilai($id_mahasiswa, $id_matakuliah) {
    $this->db->where([
        'id_mahasiswa' => $id_mahasiswa,
        'id_matakuliah' => $id_matakuliah
    ]);
    $this->db->update('mahasiswa_matakuliah', ['nilai' => null]);

    return $this->db->affected_rows() > 0;
}
}
