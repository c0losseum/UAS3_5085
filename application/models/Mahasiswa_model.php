<?php
class Mahasiswa_model extends CI_Model {
    public function get_all() {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    public function get_by_id($id_mahasiswa) {
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }
}
