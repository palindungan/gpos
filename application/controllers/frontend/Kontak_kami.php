<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_kami extends CI_Controller
{

    public function index()
    {
        $this->template->load('template_frontend', 'tampilan_frontend/v_kontak_kami');
    }
}
