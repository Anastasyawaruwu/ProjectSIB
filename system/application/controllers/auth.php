<?php  
class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username wajib di isi!!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib di isi!!']);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templatest/header');
            $this->load->view('form_login');
            $this->load->view('templatest/footer');
        }else{
            $auth = $this->model_auth->cek_login();

            if($auth == false)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Username atau Password anda Salah!!!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
              redirect('auth/login');
            }else{
                // apabila auth berhasil login
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1: redirect('admin/dashboard_admin');
                        # code...
                        break;
                    case 2: redirect('welcome');
                        break;
                    default:
                        # code...
                        break;
                }

            }

            
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

}
