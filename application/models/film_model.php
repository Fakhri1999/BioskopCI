<?php
defined('BASEPATH') or exit('No direct script access allowed');

class film_model extends CI_Model
{
    public function get_all_film($rilis)
    {
        $query = $this->db->get_where('film', array('rilis' => $rilis));
        return $query->result_array();
    }

    public function get_film($id)
    {
        $query = $this->db->get_where('film', array('ID_Film' => $id));
        return $query->row_array();
    }

    public function get_all_jadwal()
    {
        return $this->db->get('jadwal') -> result_array();
    }

    public function cari_film()
    {
        $keyword = $_GET['keyword'];
        $this->db->select('*');
        $this->db->from('film');
        $this->db->like('Judul', $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }
}