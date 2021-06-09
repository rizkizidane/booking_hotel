<?php 

class Auth extends CI_Controller{

    public function login() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->load->helper('captcha');

            $kata = array_merge(range('0','9'),range('A','Z'));
            $acak = shuffle($kata);
            $str = substr(implode($kata), 0,5);

            $data_ses = array('captcha_str'=>$str);
            $this->session->set_userdata($data_ses);

            $vals = array (
                'word' => $str,
                'img_path' => './assets/captcha/',
                'img_url' => base_url('assets/captcha'),
                'img_width' => '175',
                'img_height' => 40,
                'expiration' => 7200
            );
            $capc = create_captcha($vals);
            $data['captcha_image'] = $capc['image'];

            $this->load->view('form_login',$data);
        }
        else {
            $email      = $this->input->post('email');
            $password   = md5($this->input->post('password'));
            $cek        = $this->booking->cek_login($email, $password);
            
            if($cek == FALSE) {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Email atau Password Salah!</div>');
            }
            else {
                $this->session->set_userdata('email',$cek->email);
                $this->session->set_userdata('role_id',$cek->role_id);
                $this->session->set_userdata('nama_customer',$cek->nama_customer);
                $this->session->set_userdata('id_customer',$cek->id_customer);

                switch ($cek->role_id) {
                    case 1 : redirect('admin/home');
                        break;
                    case 2 : redirect('customer/home');
                        break;
                        
                    default: break;
                }
            }
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

?>