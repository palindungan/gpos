<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    function index()
    {
        $this->load->view('tampilan_frontend/v_daftar');
    }
}
