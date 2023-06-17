<?php
class Model_kategori extends CI_Model
{
    public function data_elektronik()
    {
            return $this->db->get_where("tb_barang",array('kategori' => 'elektronik'));
    }

    public function data_pakaian_anak()
    {
            return $this->db->get_where("tb_barang",array('kategori' => 'pakaian anak'));
    }

    public function data_pakaian_wanita_pria()
    {
            return $this->db->get_where("tb_barang",array('kategori' => 'pakaian wanita dan pria'));
    }

    public function data_kebutuhan_rumah_tangga()
    {
            return $this->db->get_where("tb_barang",array('kategori' => 'kebutuhan rumah tangga'));
    }

    public function data_kecantikan()
    {
            return $this->db->get_where("tb_barang",array('kategori' => 'kecantikan'));
    }
}