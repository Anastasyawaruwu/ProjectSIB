<?php

class Kategori extends CI_Controller
{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templatest/footer');
    }

    public function pakaian_anak()
    {
        $data['pakaian_anak'] = $this->model_kategori->data_pakaian_anak()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('pakaian_anak', $data);
        $this->load->view('templatest/footer');
    }

    public function pakaian_wanita_pria()
    {
        $data['pakaian_wanita_pria'] = $this->model_kategori->data_pakaian_wanita_pria()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('pakaian_wanita_pria', $data);
        $this->load->view('templatest/footer');
    }

    public function kebutuhan_rumah_tangga()
    {
        $data['kebutuhan_rumah_tangga'] = $this->model_kategori->data_kebutuhan_rumah_tangga()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('kebutuhan_rumah_tangga', $data);
        $this->load->view('templatest/footer');
    }
    public function kecantikan()
    {
        $data['kecantikan'] = $this->model_kategori->data_kecantikan()->result();
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('kecantikan', $data);
        $this->load->view('templatest/footer');
    }

}
