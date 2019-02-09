<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');

        if($this->session->userdata('status') =='login'){
            if ($this->session->userdata('type') != 'admin'){
                echo "<script>
                    window.location.href='" . base_url('user') . "';
                    alert('Access Denied! You are not an admin');
                    </script>";
            }
        } else {
            echo "<script>
                window.location.href='" . base_url('login') . "';
                alert('Please login first!');
                </script>";
        }
    }

    public function index()
    {       
        $data['name'] = $this->admin_model->get_data_admin($this->session->userdata('username'));
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home/index');
        $this->load->view('admin/templates/footer');
    }

    public function users()
    {
        $data['users'] = $this->admin_model->get_all_data('user');
        $data['name'] = $this->admin_model->get_data_admin($this->session->userdata('username'));
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/users/index',$data);
        $this->load->view('admin/templates/footer');
    }
   
    public function admins()
    {
        $data['admins'] = $this->admin_model->get_all_data('admin');
        $data['name'] = $this->admin_model->get_data_admin($this->session->userdata('username'));
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/admins/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function movies()
    {
        $data['movies'] = $this->admin_model->get_all_data('film');
        $data['name'] = $this->admin_model->get_data_admin($this->session->userdata('username'));
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/movies/index', $data);
        $this->load->view('admin/templates/footer');
    }

    
}