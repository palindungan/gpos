<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jalur_pembayaran extends CI_Controller
{

    // konstraktor
    function __construct()
    {
        parent::__construct();

        // untuk mengakses model data (database)
        $this->load->model("backend/M_jalur_pembayaran");
    }

    // untuk ke menu tambah form
    public function tambah_jalur_pembayaran()
    {
        $this->template->load('template_backend', 'tampilan_backend/v_jalur_pembayaran');
    }


    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_jalur_pembayaran->get_no();
        $nm_jalur = $this->input->post('nm_jalur');

        // memasukkan data ke dalam array assoc
        $data = array(
            'id_jalur' => $kode,
            'nm_jalur' => $nm_jalur
        );

        // mengirim data ke model untuk diinputkan ke dalam database
        $this->M_jalur_pembayaran->input_data('jalur_pembayaran', $data);

        // kembali ke halaman utama
        redirect('backend/jalur_pembayaran/tambah_jalur_pembayaran');
    }
}
