<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->template->load('template', 'tampilan/v_home');
    }
}
