<?php
class Invoice extends CI_Controller
{
    // agar tidak bisa kases sebelum login
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
           redirect('auth/login');
        }
    }
    
    public function index()
    {
        
        $data ['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templatest_admin/header');
        $this->load->view('templatest_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templatest_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data ['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data ['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);

        $this->load->view('templatest_admin/header');
        $this->load->view('templatest_admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templatest_admin/footer');
    }
}
