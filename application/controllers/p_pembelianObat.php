<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_PembelianObat extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Obat', '', TRUE);
    }

	public function index()
	{
        $data['pasien'] = $this->db->get_where('users', ['id_user' =>
        $this->session->userdata('id_user')])->row_array();

        if(!$data['pasien']){
            $this->session->set_flashdata('failed', 'Silahkan Login!');
            redirect('login/index');
        } else {
            $data['obat'] = $this->M_Obat->getAllObat();
            $this->load->view('pembelianObat/pasien/index', $data);
        }
    }
}