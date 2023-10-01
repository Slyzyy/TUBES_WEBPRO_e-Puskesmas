<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getUser($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }

	public function register($data){
        return $this->db->insert('users', $data);
    }
}
