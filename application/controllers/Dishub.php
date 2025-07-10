<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dishub extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dishub_view');
        $this->load->view('template/footer');
    }
}
