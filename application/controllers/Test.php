<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->template->load('template', 'home/content');
    }
}
