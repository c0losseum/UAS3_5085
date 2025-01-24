<?php
class Matakuliah_model extends CI_Model {
    public function get_all() {
        $query = $this->db->get('matakuliah');
        return $query->result();
    }

    public function get_by_dosen($id_dosen) {
        $this->db->where('id_dosen', $id_dosen);
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
}
