<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama',' Nama', 'required',['required' => 'wajib isi nama']);
        $this->form_validation->set_rules('username',' Username', 'required',['required' => 'wajib isi username']);
        $this->form_validation->set_rules('password_1',' Password', 'required|matches[password_2]',['required' => 'wajib isi Password', 'matches'  => 'Password tidak cocok'] );
        $this->form_validation->set_rules('password_2',' Password', 'required|matches[password_1]');
      
        if($this->form_validation->run() == FALSE){
            $this->load->view('templatest/header');
            $this->load->view('registrasi');
            $this->load->view('templatest/footer');
        }else{
            $data = array(
                'id'            => '',
                'nama'          => $this->input->post('nama'),
                'username'      => $this->input->post('username'),
                'password'      => $this->input->post('password'),
                'role_id'       => 2,
                
            );
            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
        
        
    }    
}
