<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_all_data($data)
    {
        return $this->db->get_where('user', $data) -> row_array();
    }

    public function edit_data($data, $uname){
        $this->db->where('username', $uname);
        $this->db->update('user', $data);
    }
}