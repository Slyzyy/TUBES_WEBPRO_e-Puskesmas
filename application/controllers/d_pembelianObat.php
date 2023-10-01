<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_PembelianObat extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Obat', '', TRUE);
    }

	public function index()
	{
        $data['dokter'] = $this->db->get_where('users', ['id_user' =>
        $this->session->userdata('id_user')])->row_array();

        if(!$data['dokter']){
            $this->session->set_flashdata('failed', 'Silahkan Login!');
            redirect('login/index');
        } else {
            $data['obat'] = $this->M_Obat->getAllObat();
            $this->load->view('pembelianObat/dokter/index', $data);
        }
    }

    public function tambahObat(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
        );
        $cek = $this->M_Obat->insert_obat($data);
        if ($cek) $this->session->set_flashdata('info', 'Obat Berhasil Ditambah');
        else $this->session->set_flashdata('info', 'Gagal Menambah Obat');
        redirect('d_pembelianObat/index');
    }

    public function ubahObat($id_obat){
        $data = array(
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
        );
        $cek = $this->M_Obat->update_obat($id_obat, $data);
        if ($cek) $this->session->set_flashdata('info', 'Data obat Berhasil Diubah');
        else $this->session->set_flashdata('info', 'Gagal Merubah Obat');
        redirect('d_pembelianObat/index');
    }

    public function hapusObat($id_obat){
        $cek = $this->M_Obat->delete_obat($id_obat, $data);
        if ($cek) $this->session->set_flashdata('info', 'Obat Berhasil Dihapus');
        else $this->session->set_flashdata('info', 'Gagal Menghapus Obat');
        redirect('d_pembelianObat/index');  
    }
}