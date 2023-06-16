<?php

class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('templatest_admin/header');
        $this->load->view('templatest_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templatest_admin/footer');
    }
}
