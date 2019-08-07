<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_backend extends CI_Controller
{

    public function index()
    {
        $this->template->load('template_backend', 'tampilan_backend/v_home_backend');
    }
}
