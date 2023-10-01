<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
    }

	public function index()
	{
		$this->load->view('login/index');
    }
    
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            $user  = $this->M_Login->getUser($email);
            $pwdCheck = password_verify($pass, $user['password']);
            if($user){
                if($pwdCheck) {
                    if($user['role'] == 'pasien'){
                        $data = [
                            'id_user' => $user['id_user'],
                        ];
                        $this->session->set_userdata($data);
    
                        $email_cache = $this->cache->get('email');
                        $pass_cache = $this->cache->get('pass');
                        if (!$email_cache){
                            $this->cache->save('email', $email_cache, 120);
                        } 
                        if (!$pass_cache){
                            $this->cache->save('pass', $pass_cache, 120);
                        }
                        $this->session->set_flashdata('success', 'Login Berhasil!');
                        redirect('p_dashboard');
                    } elseif ($user['role'] == 'dokter') {
                        $data = [
                            'id_user' => $user['id_user'],
                        ];
                        $this->session->set_userdata($data);
    
                        $email_cache = $this->cache->get('email');
                        $pass_cache = $this->cache->get('pass');
                        if (!$email_cache){
                            $this->cache->save('email', $email_cache, 120);
                        } 
                        if (!$pass_cache){
                            $this->cache->save('pass', $pass_cache, 120);
                        }
                        $this->session->set_flashdata('success', 'Login Berhasil!');
                        redirect('d_dashboard');
                    }
                } else {
                    $this->session->set_flashdata('failed', 'Password Salah!');
                    redirect('login/index');
                }
            } else {
                $this->session->set_flashdata('failed', 'Email tidak tersedia!');
                redirect('login/index');
            }
        } else {
            $this->session->set_flashdata('failed', 'Gagal Login!');
             redirect('login/index');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }

}