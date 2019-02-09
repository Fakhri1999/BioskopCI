<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        if($this->session->userdata('status') !='login'){
            echo "<script>
                window.location.href='" . base_url('login') . "';
                alert('Please login first!');
                </script>";
        }
    }

    public function index()
    {
        $sess = array(
            'username' => $this->session->userdata('username')
        );
        $data['user'] = $this->user_model->get_all_data($sess);

        $this->load->view('templates/header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $sess = array(
            'username' => $this->session->userdata('username')
        );
        $data['user'] = $this->user_model->get_all_data($sess);
        $this->load->view('templates/header');
        $this->load->view('user/edit-data', $data);
        $this->load->view('templates/footer');
    }

    public function edit_validation()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if( $this->form_validation->run())
        {
            $this->do_edit();
            echo "<script>
            window.location.href='" . base_url('user') . "';
            alert('Edit successful!');
             </script>";
        } else {
            $this->edit();
        }
    }

    public function do_edit()
    {
        $uname = $this->session->userdata('username');
        $data = array(
            'nama' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        );

        $this->user_model->edit_data($data, $uname);
    }
}