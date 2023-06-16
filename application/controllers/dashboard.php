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
        redirect('dashboard');
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
        redirect('dashboard/index');
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
