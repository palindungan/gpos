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
        // cek jika belum login (diambil dari helper)
        if(!is_logged_in())
        {
            redirect('backend');
        }
    }

    // untuk ke menu tambah form
    public function tambah_jalur_pembayaran()
    {
        $this->template->load('template_backend', 'tampilan_backend/jalur_pembayaran/v_tambah_form');
    }

    // untuk ke menu data tabel 
    public function data_tabel_jalur_pembayaran()
    {

        $data['tbl_data'] = $this->M_jalur_pembayaran->tampil_data()->result();

        $this->template->load('template_backend', 'tampilan_backend/jalur_pembayaran/v_data_table', $data);
    }

    // untuk ke menu edit data
    public function edit_jalur_pembayaran($id_jalur)
    {
        // memasukkan data ke array
        $where = array('id_jalur' => $id_jalur);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_jalur_pembayaran->edit_data('jalur_pembayaran', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/jalur_pembayaran/v_edit_form', $data);
    }


    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_jalur_pembayaran->get_no();
        $nm_jalur = $this->input->post('nm_jalur');
        //validasi
        $this->form_validation->set_rules('nm_jalur', 'Nama Jalur', 'required|alpha');
        if ($this->form_validation->run() == FALSE)
        {
            $this->template->load('template_backend', 'tampilan_backend/jalur_pembayaran/v_tambah_form');
        }
        else
        {
            // memasukkan data ke dalam array assoc
            $data = array(
                'id_jalur' => $kode,
                'nm_jalur' => $nm_jalur
            );

            // mengirim data ke model untuk diinputkan ke dalam database
            $this->M_jalur_pembayaran->input_data('jalur_pembayaran', $data);

            // kembali ke halaman utama
            redirect('backend/v_jalur_pembayaran');
        }
        
    }

    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_jalur'] = $id;

        $this->M_jalur_pembayaran->hapus_data('jalur_pembayaran', $where);
        redirect('backend/v_jalur_pembayaran');
    }

    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_jalur = $this->input->post('id_jalur');
        $nm_jalur = $this->input->post('nm_jalur');
        //validasi
        $this->form_validation->set_rules('nm_jalur', 'Nama Jalur', 'required|alpha');
        if ($this->form_validation->run() == FALSE)
        {
            $where = array('id_jalur' => $id_jalur);

            // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
            $data['tbl_data'] = $this->M_jalur_pembayaran->edit_data('jalur_pembayaran', $where)->result();

            $this->template->load('template_backend', 'tampilan_backend/jalur_pembayaran/v_edit_form', $data);
        }
        else
        {
            // memasukkan data ke dalam array assoc
            $data = array(
                'id_jalur' => $id_jalur,
                'nm_jalur' => $nm_jalur
            );

            // memasukkan data ke dalam array assoc
            $where['id_jalur'] = $id_jalur;

            $this->M_jalur_pembayaran->update_data($where, $data, 'jalur_pembayaran');

            // kembali ke halaman utama
            redirect('backend/v_jalur_pembayaran');
        }
        
    }
}
