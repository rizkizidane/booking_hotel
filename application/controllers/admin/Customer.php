<?php 

class Customer extends CI_Controller {
    
    public function index(){
        $data['customer'] = $this->booking->get_data('customer')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/customer',$data);
    }

    public function tambah_customer(){
        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_tambah_customer');
    }

    public function tambah_customer_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_customer();
        }
        else {
            $nama_customer  = $this->input->post('nama_customer');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $tanggal_lahir  = $this->input->post('tanggal_lahir');
            $no_telepon     = $this->input->post('no_telepon');
            $foto           = $_FILES['foto']['name'];
            if($foto='') {
                // $foto=$this->upload->data('./assets/upload/default.jpg');
            }
            else {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('foto')) {
                    echo "Foto Gagal Diupload!";
                }
                else{
                    $foto=$this->upload->data('file_name');
                }
            }

            $data = array (
                'nama_customer' => $nama_customer,
                'email'         => $email,
                'password'      => $password,
                'tanggal_lahir' => $tanggal_lahir,
                'no_telepon'    => $no_telepon,
                'foto'          => $foto,
            );

            $this->booking->insert_data($data, 'customer');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Ditambahkan!</div>');
            redirect('admin/customer');
        }
    }

    public function update_customer($id){
        $where = array('id_customer' => $id);
        $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer = '$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_update_customer',$data);
    }

    public function update_customer_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->update_customer();
        }
        else {
            $id             = $this->input->post('id_customer');
            $nama_customer  = $this->input->post('nama_customer');
            $email          = $this->input->post('email');
            $password       = md5($this->input->post('password'));
            $tanggal_lahir  = $this->input->post('tanggal_lahir');
            $no_telepon     = $this->input->post('no_telepon');
            $foto           = $_FILES['foto']['name'];
            if($foto) {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                
                if($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                    $this->db->set('foto',$foto);
                }
                else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array (
                'nama_customer' => $nama_customer,
                'email'         => $email,
                'password'      => $password,
                'tanggal_lahir' => $tanggal_lahir,
                'no_telepon'    => $no_telepon
            );

            $where = array (
                'id_customer'   => $id
            );

            $this->booking->update_data('customer',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Customer Berhasil Diupdate!</div>');
            redirect('admin/customer');
        }
    }

    public function delete_customer($id){
        $where = array ('id_customer' => $id);
        $this->booking->delete_data($where, 'customer');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Customer Berhasil Dihapus!</div>');
        redirect('admin/customer');
    }

    public function _rules(){
        $this->form_validation->set_rules('nama_customer','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
        $this->form_validation->set_rules('no_telepon','Nomor Telepon','required');
    }
}

?>