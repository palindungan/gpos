<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_license extends CI_Controller
{

    // konstraktor
    function __construct()
    {
        parent::__construct();

        // untuk mengakses model data (database)
        $this->load->model("backend/M_paket_license");
    }
    function index()
    {
        $data['paket_license'] = $this->M_paket_license->tampil_data()->result();
        $this->template->load('template_backend', 'tampilan_backend/v_paket_license_tampil', $data);
    }

    // untuk ke menu tambah form
    public function tambah_paket_license()
    {
        $this->template->load('template_backend', 'tampilan_backend/v_paket_license');
    }

    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_paket_license->get_no();
        $nm_paket = $this->input->post('nm_paket');
        $hrg_paket = $this->input->post('hrg_paket');
        $jml_hari = $this->input->post('jml_hari');
        // memasukkan data ke dalam array assoc
        $data = array(
            'id_paket' => $kode,
            'nm_paket' => $nm_paket,
            'hrg_paket' => $hrg_paket,
            'jml_hari_license' => $jml_hari
        );

        // mengirim data ke model untuk diinputkan ke dalam database
        $this->M_paket_license->input_data('paket_license', $data);

        // kembali ke halaman utama
        redirect('backend/paket_license/tambah_paket_license');
    }
}
