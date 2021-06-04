<?php 

class Hotel extends CI_Controller {
    
    public function index() {
        $data['hotel'] = $this->booking->get_data('hotel')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/hotel',$data);
    }

    public function tambah_hotel() {
        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_tambah_hotel');
    }

    public function tambah_hotel_aksi() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->tambah_hotel();
        }
        else {
            $nama_hotel     = $this->input->post('nama_hotel');
            $fasilitas      = $this->input->post('fasilitas');
            $rating         = $this->input->post('rating');
            $jumlah_kamar   = $this->input->post('jumlah_kamar');
            $harga          = $this->input->post('harga');
            $gambar         = $_FILES['gambar']['name'];
            if($gambar=''){}
            else {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')) {
                    echo "Gambar Gagal Diupload!";
            }
            else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_hotel'    => $nama_hotel,
            'fasilitas'     => $fasilitas,
            'rating'        => $rating,
            'jumlah_kamar'  => $jumlah_kamar,
            'harga'         => $harga,
            'gambar'        => $gambar
        );

        $this->booking->insert_data($data,'hotel');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('admin/hotel');
        }
    }

    public function update_hotel($id) {
        $where = array('id_hotel' => $id);
        $data['hotel'] = $this->db->query("SELECT * FROM hotel WHERE id_hotel='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('admin/form_update_hotel',$data);
    }

    public function update_hotel_aksi() {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->update_hotel();
        }
        else {
            $id             = $this->input->post('id_hotel');
            $nama_hotel     = $this->input->post('nama_hotel');
            $fasilitas      = $this->input->post('fasilitas');
            $rating         = $this->input->post('rating');
            $jumlah_kamar   = $this->input->post('jumlah_kamar');
            $harga          = $this->input->post('harga');
            $gambar         = $_FILES['gambar']['name'];
            if($gambar) {
                $config ['upload_path']     = './assets/upload';
                $config ['allowed_types']   = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                
                if($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar',$gambar);
                }
                else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'nama_hotel'    => $nama_hotel,
                'fasilitas'     => $fasilitas,
                'rating'        => $rating,
                'jumlah_kamar'  => $jumlah_kamar,
                'harga'         => $harga
            );

            $where = array (
                'id_hotel' => $id
            );

            $this->booking->update_data('hotel', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Berhasil Diupdate!</div>');
            redirect('admin/hotel');
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('nama_hotel','Nama Hotel','required');
        $this->form_validation->set_rules('fasilitas','Fasilitas','required');
        $this->form_validation->set_rules('rating','Rating','required');
        $this->form_validation->set_rules('jumlah_kamar','Jumlah Kamar','required');
        $this->form_validation->set_rules('harga','Harga','required');
    }

    public function delete_hotel($id) {
        $where = array ('id_hotel' => $id);
        $this->booking->delete_data($where, 'hotel');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/hotel');
    }
}

?>