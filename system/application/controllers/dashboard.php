<?php

class dashboard extends CI_Controller
{
    // agar tidak bisa kases sebelum login
    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
           redirect('auth/login');
        }
    }

    

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_barang,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang
        );
        
        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templatest/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran()
    {
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templatest/footer');
    }

    public function proses_pesanan()
    {
        $is_proses = $this->model_invoice->index();
        if($is_proses){
            $this->cart->destroy();
            $this->load->view('templatest/header');
            $this->load->view('templatest/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templatest/footer');
        }else{
            echo "Maaf, Pesanan anda gagal di proses";
        }
    }

    public function detail($id_barang)
    {
        $data['barang'] = $this->model_barang->detail_barang($id_barang);
        $this->load->view('templatest/header');
        $this->load->view('templatest/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templatest/footer');
    }
}
