<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function register($data)
    {
        $this->db->insert('user', $data);
    }

    public function login($tipe,$data){
        $query = $this->db->get_where($tipe, $data);

        if($query -> num_rows() > 0)
        {
            return true;
        } else {
            return false;   
        }
    }

    public function login_admin($data)
    {
        $query = $this->db->get_where('admin', $data);
            if($query ->num_rows() > 0){
                return true;
            } else {
                return false;
            }
    }
}