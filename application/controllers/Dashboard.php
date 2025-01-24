<?php
class Dosen_model extends CI_Model {
    public function check_credentials($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('dosen');
        $dosen = $query->row();
        if ($dosen && password_verify($password, $dosen->password)) {
            return $dosen;
        }
        return false;
    }
}