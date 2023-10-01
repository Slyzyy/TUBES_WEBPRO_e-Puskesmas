<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_Dashboard extends CI_Controller {
	public function index()
	{
        $data['pasien'] = $this->db->get_where('users', ['id_user' =>
        $this->session->userdata('id_user')])->row_array();

        if(!$data['pasien']){
            $this->session->set_flashdata('failed', 'Silahkan Login!');
            redirect('login/index');
        } else {
            $this->load->view('dashboard/pasien/index', $data);
        }
    }
}