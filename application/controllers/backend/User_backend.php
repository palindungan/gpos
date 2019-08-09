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
    public function edit_user_backend($id_user_b)
    {
        // memasukkan data ke array
        $where = array('id_user_b' => $id_user_b);

        // fungsi result adalah mengenerate hasil querry menjadi array untuk di tampilkan
        $data['tbl_data'] = $this->M_user_backend->edit_data('user_backend', $where)->result();

        $this->template->load('template_backend', 'tampilan_backend/user_backend/v_edit_form', $data);
    }


    function tambah_aksi()
    {
        // mengambil dari inputan (name)
        $kode = $this->M_user_backend->get_no();
        $nm_user_b = $this->input->post('nm_user_b');
        $jenkel = $this->input->post('jenkel');
        $almt_user_b = $this->input->post('almt_user_b');
        $no_hp = $this->input->post('no_hp');
        $email_user_b = $this->input->post('email_user_b');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $now = date('Y-m-d H:i:s');

        $k_password = $this->input->post('k_password');
        if ($k_password == $password) {

            // memasukkan data ke dalam array assoc
            $data = array(
                'id_user_b' => $kode,
                'nm_user_b' => $nm_user_b,
                'jenkel' => $jenkel,
                'almt_user_b' => $almt_user_b,
                'no_hp' => $no_hp,
                'email_user_b' => $email_user_b,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'tgl_regist' => $now
            );

            // mengambil jumlah baris
            $cek = $this->M_user_backend->ambil_data($username)->num_rows();

            if ($cek > 0) {

                // pemberitahuan dan pindah page window
                echo "<script>alert('Tidak Boleh Ada 2 Username yang Sama'); window.location = '" . base_url('backend/add_user_backend') . "';</script>";
            } else {

                // mengirim data ke model untuk diinputkan ke dalam database
                $this->M_user_backend->input_data('user_backend', $data);

                // kembali ke halaman utama
                // redirect('backend/user_backend/tambah_user_backend');
                echo "<script>alert('Berhasil Menambah Data !'); window.location = '" . base_url('backend/v_user_backend') . "';</script>";
            }
        } else {   // pemberitahuan dan pindah page window
            echo "<script>alert('Password dan konfirmasi password harus sama !!'); window.location = '" . base_url('backend/add_user_backend') . "';</script>";
        }
    }

    function hapus_aksi($id)
    {
        // memasukkan data ke dalam array assoc
        $where['id_user_b'] = $id;

        $this->M_user_backend->hapus_data('user_backend', $where);
        redirect('backend/v_user_backend');
    }

    function update_aksi()
    {
        // mengambil dari inputan (name)
        $id_user_b = $this->input->post('id_user_b');
        $nm_user_b = $this->input->post('nm_user_b');
        $jenkel = $this->input->post('jenkel');
        $almt_user_b = $this->input->post('almt_user_b');
        $no_hp = $this->input->post('no_hp');
        $email_user_b = $this->input->post('email_user_b');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $k_password = $this->input->post('k_password');

        if ($k_password == $password) {

            // memasukkan data ke dalam array assoc
            $data = array(
                'id_user_b' => $id_user_b,
                'nm_user_b' => $nm_user_b,
                'jenkel' => $jenkel,
                'almt_user_b' => $almt_user_b,
                'no_hp' => $no_hp,
                'email_user_b' => $email_user_b,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );

            // mengambil jumlah baris
            $cek = $this->M_user_backend->ambil_data($username)->num_rows();

            if ($cek > 1) {

                // pemberitahuan dan pindah page window
                echo "<script>alert('Tidak Boleh Ada 2 Username yang Sama'); window.location = '" . base_url('backend/v_user_backend') . "';</script>";
            } else {

                // memasukkan data ke dalam array assoc
                $where['id_user_b'] = $id_user_b;

                $this->M_user_backend->update_data($where, $data, 'user_backend');

                // kembali ke halaman utama
                // redirect('backend/user_backend/data_tabel_user_backend');
                // pemberitahuan dan pindah page window
                echo "<script>alert('Berhasil Update Data !'); window.location = '" . base_url('backend/v_user_backend') . "';</script>";
            }
        } else {   // pemberitahuan dan pindah page window
            echo "<script>alert('Password dan konfirmasi password harus sama !!'); window.location = '" . base_url('backend/v_user_backend') . "';</script>";
        }
    }
}
