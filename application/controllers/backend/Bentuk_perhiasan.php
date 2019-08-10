<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bentuk_perhiasan extends CI_Controller
{

    // konstraktor
    function __construct()
    {
        parent::__construct();
        // untuk mengakses model data (database)
        $this->load->model("backend/M_bentuk_perhiasan");
        // cek jika belum login (diambil dari helper)
        if(!is_logged_in())
        {
            redirect('backend');
        }
    }
    function data_tabel_bentuk_perhiasan()
    {
        $data['bentuk_perhiasan'] = $this->M_bentuk_perhiasan->tampil_data()->result();
        $this->template->load('template_backend', 'tampilan_backend/bentuk_perhiasan/v_data_table', $data);
    }

    // untuk ke menu tambah form
    public function tambah_bentuk_perhiasan()
    {
        $this->template->load('template_backend', 'tampilan_backend/bentuk_perhiasan/v_tambah_form');
    }

    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_bentuk_perhiasan->get_no();
        $id_user_b = $this->input->post('id_user_b');
        $nm_bentuk = $this->input->post('nm_bentuk');
        $now = date('Y-m-d H:i:s');
        // memasukkan data ke dalam array assoc
        $data = array(
            'id_bentuk' => $kode,
            'id_user_b' => $id_user_b,
            'nm_bentuk' => $nm_bentuk,
            'tgl_input' => $now
        );

        // mengirim data ke model untuk diinputkan ke dalam database
        $this->M_bentuk_perhiasan->input_data('bentuk_perhiasan', $data);

        // kembali ke halaman utama
        redirect('backend/v_bentuk_perhiasan');
    }
    // untuk ke menu edit data
    public function edit_bentuk_perhiasan($id)
    {
        // memasukkan data ke array
        $where = array('id_bentuk' => $id);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_bentuk_perhiasan->edit_data('bentuk_perhiasan', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/bentuk_perhiasan/v_edit_form', $data);
    }
    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_bentuk = $this->input->post('id_bentuk');
        $id_user_b = $this->input->post('id_user_b');
        $nm_bentuk = $this->input->post('nm_bentuk');
        $now = date('Y-m-d H:i:s');

        // memasukkan data ke dalam array assoc
        $data = array(
            'id_bentuk' => $id_bentuk,
            'id_user_b' => $id_user_b,
            'nm_bentuk' => $nm_bentuk,
            'tgl_input' => $now
        );

        // memasukkan data ke dalam array assoc
        $where['id_bentuk'] = $id_bentuk;

        $this->M_bentuk_perhiasan->update_data($where, $data, 'bentuk_perhiasan');

        // kembali ke halaman utama
        redirect('backend/v_bentuk_perhiasan');
    }
    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_bentuk'] = $id;

        $this->M_bentuk_perhiasan->hapus_data('bentuk_perhiasan', $where);

        redirect('backend/v_bentuk_perhiasan');
    }
}
