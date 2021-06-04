<?php 

class Register extends CI_Controller{

    public function index(){
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->load->view('form_register');
        }
        else {
            $nama_customer  = $this->input->post('nama_customer');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $tanggal_lahir  = $this->input->post('tanggal_lahir');
            $no_telepon     = $this->input->post('no_telepon');
            $role_id        = '2';
            // $foto           = $_FILES['foto']['name'];
            // if($foto=''){}
            // else {
            //     $config ['upload_path']     = './assets/upload';
            //     $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

            //     $this->load->library('upload', $config);
            //     if(!$this->upload->do_upload('foto')) {
            //         echo "foto Gagal Diupload!";
            //     }
            //     else{
            //         $foto=$this->upload->data('file_name');
            //     }
            // }

            $data = array (
                'nama_customer' => $nama_customer,
                'email'         => $email,
                'password'      => $password,
                'tanggal_lahir' => $tanggal_lahir,
                'no_telepon'    => $no_telepon,
                // 'foto'          => $foto,
                'role_id'       => $role_id
            );

            $this->booking->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Berhasil Register, Silahkan Login!</div>');
            redirect('auth/login');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_customer','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password', array('required', 'min_length[8]'));
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required');
    }
}

?>