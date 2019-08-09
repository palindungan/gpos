<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // konstraktor
    function __construct()
    {
        parent::__construct();

        // untuk mengakses model user (database)
        $this->load->model("backend/M_login");
    }

    function index()
    {
        $this->load->view('tampilan_backend/v_login');
    }

    function aksi_login()
    {
        // ambil data dari inputan 
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // mengambil jumlah baris
        $cek = $this->M_login->ambil_data($username)->num_rows();

        // cek apakah ada data dari username
        if ($cek > 0) {

            // mengambil data dari database berdasarkan username
            $query = $this->M_login->ambil_data($username);

            // mengeluarkan data dari database
            foreach ($query->result_array() as $row) {

                // dicek apakah data inputan sama dengan data di database
                if (password_verify($password, $row["password"])) {

                    // session
                    $data_session = array(
                        'id_user_b' => $row['id_user_b'],
                        'nm_user_b' => $row['nm_user_b'],
                        'username' => $username
                    );
                    $this->session->set_userdata($data_session);

                    // mengupdate data tgl_last_log_in di database
                    date_default_timezone_set('Asia/Jakarta');
                    $id_user_b = $row['id_user_b'];
                    $now = date('Y-m-d H:i:s');

                    // memasukkan data ke dalam array assoc
                    $data = array(
                        'tgl_last_log_in' => $now
                    );

                    // memasukkan data ke dalam array assoc
                    $where['id_user_b'] = $id_user_b;

                    $this->M_login->update_data($where, $data, 'user_backend');

                    // link
                    redirect('backend/home');
                } else {
                    echo "<script> alert('Password Anda Salah'); window.location.href = '" . base_url() . "backend/login'; </script>";
                }
            }
        } else {

            echo "<script> alert('Username Tidak Ada'); window.location.href = '" . base_url() . "backend/login'; </script>";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('backend/login'));
    }
}
