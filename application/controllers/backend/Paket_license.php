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
        // cek jika belum login (diambil dari helper)
        if(!is_logged_in())
        {
            redirect('backend');
        }
    }
    function data_tabel_paket_license()
    {
        $data['paket_license'] = $this->M_paket_license->tampil_data()->result();
        $this->template->load('template_backend', 'tampilan_backend/paket_license/v_data_table', $data);
    }

    // untuk ke menu tambah form
    public function tambah_paket_license()
    {
        $this->template->load('template_backend', 'tampilan_backend/paket_license/v_tambah_form');
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
        redirect('backend/v_paket_license');
    }
    // untuk ke menu edit data
    public function edit_paket_license($id)
    {
        // memasukkan data ke array
        $where = array('id_paket' => $id);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_paket_license->edit_data('paket_license', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/paket_license/v_edit_form', $data);
    }
    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_paket = $this->input->post('id_paket');
        $nm_paket = $this->input->post('nm_paket');
        $hrg_paket = $this->input->post('hrg_paket');
        $jml_hari = $this->input->post('jml_hari');

        // memasukkan data ke dalam array assoc
        $data = array(
            'id_paket' => $id_paket,
            'nm_paket' => $nm_paket,
            'hrg_paket' => $hrg_paket,
            'jml_hari_license' => $jml_hari
        );

        // memasukkan data ke dalam array assoc
        $where['id_paket'] = $id_paket;

        $this->M_paket_license->update_data($where, $data, 'paket_license');

        // kembali ke halaman utama
        redirect('backend/v_paket_license');
    }
    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_paket'] = $id;

        $this->M_paket_license->hapus_data('paket_license', $where);

        redirect('backend/v_paket_license');
    }
}
