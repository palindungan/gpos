<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level_user extends CI_Controller
{

    // konstraktor
    function __construct()
    {
        parent::__construct();

        // untuk mengakses model data (database)
        $this->load->model("backend/M_level_user");
        // cek jika belum login (diambil dari helper)
        if(!is_logged_in())
        {
            redirect('backend');
        }
    }
    function data_tabel_level_user()
    {
        $data['level_user'] = $this->M_level_user->tampil_data()->result();
        $this->template->load('template_backend', 'tampilan_backend/level_user/v_data_table', $data);
    }

    // untuk ke menu tambah form
    public function tambah_level_user()
    {
        $this->template->load('template_backend', 'tampilan_backend/level_user/v_tambah_form');
    }

    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_level_user->get_no();
        $nm_level = $this->input->post('nm_level');
        $jml_max = $this->input->post('jml_max');
        // validasi form
        $this->form_validation->set_rules('nm_level', 'Nama Level', 'required|alpha');
        $this->form_validation->set_rules('jml_max', 'Jumlah Max', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
        {
            $this->template->load('template_backend', 'tampilan_backend/level_user/v_tambah_form');
        }
        else
        {
        // memasukkan data ke dalam array assoc

            $data = array(
                'id_level' => $kode,
                'nm_level' => $nm_level,
                'jml_max' => $jml_max
            );

            // mengirim data ke model untuk diinputkan ke dalam database
            $this->M_level_user->input_data('level_user', $data);

            // kembali ke halaman utama
            redirect('backend/v_level_user');
        }
    }
    // untuk ke menu edit data
    public function edit_level_user($id)
    {
        // memasukkan data ke array
        $where = array('id_level' => $id);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_level_user->edit_data('level_user', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/level_user/v_edit_form', $data);
    }
    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_level = $this->input->post('id_level');
        $nm_level = $this->input->post('nm_level');
        $jml_max = $this->input->post('jml_max');
        // validasi form
        $this->form_validation->set_rules('nm_level', 'Nama Level', 'required|alpha');
        $this->form_validation->set_rules('jml_max', 'Jumlah Max', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
        {
            $where = array('id_level' => $id_level);

            // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
            $data['tbl_data'] = $this->M_level_user->edit_data('level_user', $where)->result();

            $this->template->load('template_backend', 'tampilan_backend/level_user/v_edit_form', $data);
        }
        else
        {
            // memasukkan data ke dalam array assoc
            $data = array(
                'id_level' => $id_level,
                'nm_level' => $nm_level,
                'jml_max' => $jml_max
            );

            // memasukkan data ke dalam array assoc
            $where['id_level'] = $id_level;

            $this->M_level_user->update_data($where, $data, 'level_user');

            // kembali ke halaman utama
            redirect('backend/v_level_user');
        }
        
    }
    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_level'] = $id;

        $this->M_level_user->hapus_data('level_user', $where);

        redirect('backend/v_level_user');
    }
}
