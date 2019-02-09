<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('film_model');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function movies_list($rilis)
    {
        $data['film'] = $this->film_model->get_all_film($rilis);
        $this->load->view('templates/header');
        if( $rilis== 1 ){        
            $this->load->view('movies/now-playing', $data);
        } else if( $rilis == 0 ){
            $this->load->view('movies/coming-soon', $data);
        }
        $this->load->view('templates/footer');
    }

    public function movie_detail($id)
    {
        $data['film'] = $this->film_model->get_film($id);
        $this->load->view('templates/header');
        $this->load->view('movies/movie-detail', $data);
        $this->load->view('templates/footer');
    }

    public function schedule()
    {
        $data['film'] = $this->film_model->get_all_film(1);
        $data['jadwal'] = $this->film_model->get_all_jadwal();

        $this->load->view('templates/header');
        $this->load->view('movies/schedule', $data);
        $this->load->view('templates/footer');
    }

    public function cari()
    {
        $data['film'] = $this->film_model->cari_film();
        $this->load->view('templates/header');
        $this->load->view('templates/search', $data);
        $this->load->view('templates/footer');
    }

}