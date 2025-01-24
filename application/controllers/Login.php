<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
        $this->load->view('login');
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->check_credentials($username, $password);

        if ($dosen) {
            $this->session->set_userdata('dosen_id', $dosen->id_dosen);
            redirect('rekap');
        } else {
            $this->session->set_flashdata('error', 'Invalid credentials');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('dosen_id');
        redirect('login');
    }
}