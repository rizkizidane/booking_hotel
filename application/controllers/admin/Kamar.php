<?php 

class Kamar extends CI_Controller {
    
    public function index() {
        $data['kamar'] = $this->booking->get_data('kamar')->result();
        // $data['kamar'] = $this->db->query("SELECT * FROM kamar k, hotel h WHERE k.id_hotel = h.id_hotel")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('admin/kamar',$data);
    }

    public function tambah_kamar() {
        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_tambah_kamar');
    }

    public function tambah_kamar_aksi() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_kamar();
        }
        else {
            $tipe_kamar     = $this->input->post('tipe_kamar');
            $jumlah_kamar   = $this->input->post('jumlah_kamar');
            $harga          = $this->input->post('harga');

            $data = array(
                'tipe_kamar'    => $tipe_kamar,
                'jumlah_kamar'  => $jumlah_kamar,
                'harga'         => $harga
            );

            $this->booking->insert_data($data,'kamar');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!</div>');
            redirect('admin/kamar');
        }
    }

    public function update_kamar($id) {
        $where = array('id_kamar' => $id);
        $data['kamar'] = $this->db->query("SELECT * FROM kamar WHERE id_kamar='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_update_kamar',$data);
    }

    public function update_kamar_aksi() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->update_kamar();
        }
        else {
            $id             = $this->input->post('id_kamar');
            $tipe_kamar     = $this->input->post('tipe_kamar');
            $jumlah_kamar   = $this->input->post('jumlah_kamar');
            $harga          = $this->input->post('harga');

            $data = array(
                'tipe_kamar'    => $tipe_kamar,
                'jumlah_kamar'  => $jumlah_kamar,
                'harga'         => $harga
            );

            $where = array (
                'id_kamar' => $id
            );

            $this->booking->update_data('kamar', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate!</div>');
            redirect('admin/kamar');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('tipe_kamar','Tipe Kamar','required');
        $this->form_validation->set_rules('jumlah_kamar','Jumlah Kamar','required');
        $this->form_validation->set_rules('harga','Harga','required');
    }

    public function delete_kamar($id) {
        $where = array ('id_kamar' => $id);
        $this->booking->delete_data($where, 'kamar');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/kamar');
    }
}

?>