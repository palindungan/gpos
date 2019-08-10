<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        // cek jika belum login (diambil dari helper)
        if(!is_logged_in())
        {
            redirect('backend');
        }
    }
    public function index()
    {
        $this->template->load('template_backend', 'tampilan_backend/v_home');
    }
}
