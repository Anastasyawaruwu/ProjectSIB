<?php

class dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templatest/footer');
    }
}
