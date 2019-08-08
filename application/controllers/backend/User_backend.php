<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_backend extends CI_Controller
{

    // konstraktor
    function __construct()
    {
        parent::__construct();

        // untuk mengakses model data (database)
        $this->load->model("backend/M_user_backend");
    }

    // untuk ke menu tambah form
    public function tambah_user_backend()
    {
        $this->template->load('template_backend', 'tampilan_backend/user_backend/v_tambah_form');
    }

    // untuk ke menu data tabel 
    public function data_tabel_user_backend()
    {

        $data['tbl_data'] = $this->M_user_backend->tampil_data()->result();

        $this->template->load('template_backend', 'tampilan_backend/user_backend/v_data_table', $data);
    }

    // untuk ke menu edit data
    public function edit_user_backend($id_jalur)
    {
        // memasukkan data ke array
        $where = array('id_jalur' => $id_jalur);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_user_backend->edit_data('user_backend', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/user_backend/v_edit_form', $data);
    }


    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_user_backend->get_no();
        $nm_jalur = $this->input->post('nm_jalur');

        // memasukkan data ke dalam array assoc
        $data = array(
            'id_jalur' => $kode,
            'nm_jalur' => $nm_jalur
        );

        // mengirim data ke model untuk diinputkan ke dalam database
        $this->M_user_backend->input_data('user_backend', $data);

        // kembali ke halaman utama
        redirect('backend/user_backend/tambah_user_backend');
    }

    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_jalur'] = $id;

        $this->M_user_backend->hapus_data('user_backend', $where);
        redirect('backend/user_backend/tambah_user_backend');
    }

    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_jalur = $this->input->post('id_jalur');
        $nm_jalur = $this->input->post('nm_jalur');

        // memasukkan data ke dalam array assoc
        $data = array(
            'id_jalur' => $id_jalur,
            'nm_jalur' => $nm_jalur
        );

        // memasukkan data ke dalam array assoc
        $where['id_jalur'] = $id_jalur;

        $this->M_user_backend->update_data($where, $data, 'user_backend');

        // kembali ke halaman utama
        redirect('backend/user_backend/data_tabel_user_backend');
    }
}
