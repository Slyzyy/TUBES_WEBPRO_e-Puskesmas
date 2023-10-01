<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('M_Login');
    }

	public function index()
	{
		$this->load->view('register/index');
    }

    public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run()) {
			$data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role' => $this->input->post('role')
			];
            $this->M_Login->register($data);
			$this->session->set_flashdata('success', 'Berhasil Register Akun, Silahkan Login');
            redirect('login');
		} else {
			$this->session->set_flashdata('failed', 'Gagal Register!');
            redirect('register/index');
		}
	}

}