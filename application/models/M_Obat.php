<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Obat extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAllObat(){
        return $this->db->get('obat')->result_array();
    }

    public function get_obat($id_obat){
        $this->db->where('id_obat', $id_obat);
        return $this->db->get('obat')->row_array();
    }

    public function insert_obat($data){
        return $this->db->insert('obat', $data);
    }

    public function update_obat($id_obat, $data){
        $this->db->where('id_obat', $id_obat);
        return $this->db->update('obat', $data);
    }

    public function delete_obat($id_obat){
        $this->db->where('id_obat', $id_obat);
        return $this->db->delete('obat');
    }
}
