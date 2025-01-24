<?php 
class Dosen_model extends CI_Model {
    public function check_credentials($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('dosen');
        $dosen = $query->row();

        // Bandingkan password langsung (tanpa hash)
        if ($dosen && $password === $dosen->password) {
            return $dosen;
        }
        return false;
    }
}
