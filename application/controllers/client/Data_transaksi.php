<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_transaksi extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'tampilan/v_data_transaksi');
    }
}
