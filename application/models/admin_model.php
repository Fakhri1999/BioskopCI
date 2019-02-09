<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get_data_admin($uname)
    {
        return $this->db->get_where('admin', array ('username' => $uname)) -> row_array();
    }
    public function get_all_data($table)
    {
        return $this->db->get($table) -> result_array();
    }

}