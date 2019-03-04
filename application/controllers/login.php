<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');

        // if($this->session->userdata('status') =='login'){
        //     echo "<script>
        //         window.location.href='" . base_url('user') . "';
        //         </script>";
        // }
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $data['jeniskel'] = ['L', 'P'];
        $this->load->view('templates/header');
        $this->load->view('login/register', $data);
        $this->load->view('templates/footer');
    }

    public function register_validation()
    {
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password confirmation', 'required|matches[password]');
        if ($this->form_validation->run()) {
            $this->do_register();
            echo "<script>
                window.location.href='" . base_url('login') . "';
                alert('Registration successful!');
                </script>";

        } else {
            $this->register();
        }
    }

    public function do_register()
    {
        $data = array(
            'nama' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'jenis_kelamin' => $this->input->post('jenisKelamin'),
            'password' => $this->input->post('password')
        );
        $this->login_model->register($data);
    }

    public function login_validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            if ($this->do_login('user') == true) {
                $session_data = array(
                    'username' => $this->input->post('username'),
                    'status' => 'login',
                    'type' => 'user'
                );

                $this->session->set_userdata($session_data);

                echo "<script>
                window.location.href='" . base_url('home') . "';
                alert('Login successful!');
                 </script>";

            } else if ($this->do_login('admin') == true) {
                $session_data = array(
                    'username' => $this->input->post('username'),
                    'status' => 'login',
                    'type' => 'admin'
                );

                $this->session->set_userdata($session_data);

                echo "<script>
                window.location.href='" . base_url('admin') . "';
                alert('Login admin successful!');
                 </script>";
            } else {
                $this->session->set_flashdata('error', 'Username or Password invalid!');
                redirect('login/index');
            }
        } else {
            $this->index();
        }
    }

    public function do_login($tipe)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        return $this->login_model->login($tipe,$data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo "<script>
            window.location.href='" . base_url('login') . "';
            alert('Logout successful!');
            </script>";
    }

    public function forget_password()
    {
        $this->load->view('templates/header');
        $this->load->view('login/forget_password');
        $this->load->view('templates/footer');
    }
}